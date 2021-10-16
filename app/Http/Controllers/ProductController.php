<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
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
        $associations = Association::all();

        $product = new product();
        return view('product.create', compact('product', 'categories', 'associations'));
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
            'association_id' => ['required', 'numeric'],
            'categories'  => ['required', 'array'],
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
        /**
         * Query for recomend products
         */
        $relation_products = DB::table('category_product')
            ->join('products as p', function ($join) use ($product) {
                $join->on('p.id', '=', 'category_product.product_id')
                    ->where('product_id', '!=', $product->id);
            });
        foreach ($product->categories as $category) {
            $where = ['category_id', '=', $category->id];
            $relation_products->orWhere('category_id', '=', $category->id);
        }
        $relation_products = $relation_products
            ->select([
                'category_product.product_id',
                'p.id',
                'p.name',
                'p.price',
                'p.quantity',
                'p.description',
                'p.association_id',
                'p.images',
                'p.size',
                'p.selled'
            ])
            ->groupBy('product_id')->get();
        $productInCart = \Cart::get($product->id);
        return view('product.show', compact('product', 'relation_products', 'productInCart'));
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
        $categories = Category::all();
        $associations = Association::all();
        $product = product::with('categories')->findOrFail($id);
        return view('product.edit', compact('product', 'categories', 'associations'));
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
        $product = product::findOrFail($id);
        $data = $request->validate([
            'name'        => ['required', 'string', 'max:30'],
            'quantity'    => ['required', 'numeric'],
            'price'       => ['required', 'numeric'],
            'size'        => ['required', 'string'],
            'description' => ['nullable', 'string', 'max:500'],
            // 'images'      => ['required', 'array'],
            'association_id' => ['required', 'numeric'],
            'categories'  => ['required', 'array'],
        ]);

        // if ($request->hasFile('images')) {
        //     $product = product::findOrFail($id);
        //     Storage::delete('public/' . $product->images);
        //     $data['images'] = $request->file('images')->store('uploads', 'public');
        // }

        if (isset($data['categories'])) {
            $product->categories()->sync($data['categories']);
            unset($data['categories']);
        }
        $product->update($data);
        return redirect()->route('product.show', $product->id)->with('message', 'Producto agregado');
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
