<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\product as Product;

class PayPalController extends Controller
{
    private $client;
    private $clientId;
    private $secret;
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('PAYPAL_URI_API', 'https://api-m.sandbox.paypal.com')
        ]);

        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_CLIENT_SECRET');
    }

    private function getAccessToken()
    {
        $response = $this->client->request(
            'POST',
            '/v1/oauth2/token',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'body' => 'grant_type=client_credentials',
                'auth' => [
                    $this->clientId, $this->secret, 'basic'
                ]
            ]
        );

        $data = json_decode($response->getBody(), true);
        return $data['access_token'];
    }

    public function process($orderId)
    {

        $accessToken = $this->getAccessToken();

        $response1 = $this->client->request('GET', "/v2/checkout/orders/$orderId", [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $accessToken"
            ]
        ]);
        $data1 = json_decode($response1->getBody(), true);

        if ($data1['status'] === 'APPROVED') {
            $products = \Cart::getContent();
            foreach ($products as $product) {
                Product::where('id', $product->id)->decrement('quantity', $product->quantity);
            }
        }

        $requestUrl = "/v2/checkout/orders/$orderId/capture";

        $response = $this->client->request('POST', $requestUrl, [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => "Bearer $accessToken"
            ]
        ]);

        $data = json_decode($response->getBody(), true);


        if ($data['status'] === 'COMPLETED') {
            \Cart::clear();
            return [
                'success' => true,
                'data' => $data,
                'data11' => $data1
            ];
        }

        return [
            'success' => false,
            'data' => $data
        ];
    }
}
