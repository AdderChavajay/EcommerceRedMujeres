<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        $products = product::with('categories')->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        $product = new product();
        return view('product.create', compact('product', 'categories'));
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
            'name'        => ['required', 'string', 'max:30'],
            'quantity'    => ['required', 'numeric'],
            'price'       => ['required', 'numeric'],
            'size'        => ['required', 'string'],
            'description' => ['nullable', 'string', 'max:500'],
            'images'      => ['required', 'array'],
            'categories'      => ['required', 'array'],
        ]);

        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $url = $image->store('uploads', 'public');
                array_push($images, $url);
            }
        }
        $data['images'] = join(',', $images);
        $product = Product::create($data);
        $product->categories()->sync($data['categories']);
        return redirect()->route('product.index')->with('message', 'Producto agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = request()->except(['_token', '_method']);

        if ($request->hasFile('images')) {
            $product = product::findOrFail($id);
            Storage::delete('public/' . $product->images);
            $data['images'] = $request->file('images')->store('uploads', 'public');
        }

        product::where('id', '=', $id)->update($data);
        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $images = explode(',', $product->images);
        foreach ($images as $image) {
            Storage::delete('public/' . $image);
        }
        product::destroy($id);
        return redirect('product')->with('message', 'Producto Borrado');
    }
}
