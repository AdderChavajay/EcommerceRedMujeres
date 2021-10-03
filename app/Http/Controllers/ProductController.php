<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

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
        $datos['products']=product::paginate(10);
        return view('product.index',$datos);
        //return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*
//utilizando esta validacion me retornaba que el valor de images tenia que ser tipo string
//al principio funciono enctype="multipart/form-data" pero es ecencial para el manejo de fotos
        $data = $request->validate([
            'name'        => ['required', 'string', 'max:30'],
            'quantity'    => ['required', 'numeric'],
            'price'       => ['required', 'numeric'],
            'size'        => ['required', 'string'],
            'description' => ['nullable', 'string', 'max:500'],
            'images'      => ['nullable', 'string'],
        ]);
*/
        $data = request()->except('_token'); 

        if($request->hasFile('images')){
            $data['images']=$request->file('images')->store('uploads','public');
        }
        
     
        Product::insert($data);
        //return response()->json($data);
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
        return view('product.show');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        product::destroy($id);
        return redirect('product');
    }
}
