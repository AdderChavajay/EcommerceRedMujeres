<?php

namespace App\Http\Controllers;

use App\Models\allCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\product as Product;

class CatalogController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('selled', 'desc')->limit(10)->get();
        return view('HomeEcommerce', compact('products'));
    }

    public function allproducts(Request $request)
    {
        $category_id = $request->query('category');
        $category = Category::findOrFail($category_id);
        $products = $category->products()->paginate(15);
        $products->appends(['category' => $category_id]);
        return view('catalog.index', compact('products', 'category'));
    }
}
