<?php

namespace App\Http\Controllers;

use App\Models\allCategory;
use Illuminate\Http\Request;
use App\Models\product;

class CatalogController extends Controller
{
    //
    public function index()
    {
        $products = product::orderBy('selled', 'desc')->limit(10)->get();
        return view('HomeEcommerce', compact('products'));
    }
}
