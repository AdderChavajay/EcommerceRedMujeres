<?php

namespace App\Http\Controllers;

use App\Models\shopping;
use App\Models\product as Product;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = \Cart::getContent();
        return view('shopping.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => ['required', 'numeric'],
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'size' => ['required', 'string'],
            'quantity' => ['required', 'numeric'],
            'image' => ['required', 'string'],
        ]);
        // dd($data);
        \Cart::add([
            'id' => $data['id'],
            'name' => $data['name'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'attributes' => array(
                'size' => $data['size'],
                'image' => $data['image'],
            )
        ]);
        session()->flash('success', 'Producto agregado correctamente !');
        return redirect()->route('shopping.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function show(shopping $shopping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, shopping $shopping)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'El producto se ha actualizado !');

        return redirect()->route('shopping.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\shopping  $shopping
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \Cart::remove($id);
        session()->flash('success', 'El producto se ha eliminado !');

        return redirect()->route('shopping.index');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Todos los productos se ha eliminados del carrito !');

        return redirect()->route('shopping.index');
    }
}
