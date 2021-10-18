<?php

namespace App\Http\Controllers;

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

    public function allCategories()
    {
        $categories = Category::paginate(10);
        return view('showCategories.index', compact('categories'));
    }

    public function allproducts(Request $request)
    {
        $category_id = $request->query('category');
        $category = Category::findOrFail($category_id);
        $products = $category->products()->paginate(15);
        $products->appends(['category' => $category_id]);
        return view('catalog.index', compact('products', 'category'));
    }

    public function search()
    {
        $products = Product::query()->when(request('search'), function ($query, $search) {
            $query->select('id', 'name', 'quantity', 'description', 'images', 'price', 'size')
                ->selectRaw('
                match(name, description)
                against(? in natural language mode) as score
            ', [$search])
                ->whereRaw('
                match(name, description)
                against(? in natural language mode) > 0.0000001
            ', [$search]);
        })->paginate(20);
        return view('catalog.index', compact('products'));
    }
}
