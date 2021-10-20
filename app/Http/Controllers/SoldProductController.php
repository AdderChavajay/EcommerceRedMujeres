<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoldProductController extends Controller
{
    //

    public function index()
    {
        return view('SoldProduct.index');
    }
}
