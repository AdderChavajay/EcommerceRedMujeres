<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase_made as Purchased;

class SoldProductController extends Controller
{
    //

    public function index()
    {
        $purchaseds = Purchased::with('user:name,id,last_name')->paginate(20);
        return view('SoldProduct.index', compact('purchaseds'));
    }

    public function show($sale)
    {
        $purchased = Purchased::with('details.product')->findOrFail($sale);
        return view('SoldProduct.show', compact('purchased'));
    }
}
