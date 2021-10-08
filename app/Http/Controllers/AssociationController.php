<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('association.index');

        $associations = Association::paginate(10);
        return view('association.index', compact('associations'));

        /*
        $dato['associations'] = Association::paginate(10);
        return view('association.index', $dato);
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $association = new Association();
        return view('association.create', compact('association'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data = $request->validate([
            'name' => ['required', 'string'],
        ]);
        //$data=request()->except('_token');


        Association::insert($data);
        // return response()->json($data);
        return redirect()->route('association.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $association = Association::findOrFail($id);
        return view('association.edit', compact('association'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = request()->except(['_token', '_method']);
        Association::where('id', '=', $id)->update($data);
        $association = Association::findOrFail($id);
        return view('association.edit', compact('association'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Association  $association
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Association::findOrFail($id);
        Association::destroy($id);
        return redirect('association')->with('message', 'Producto Borrado');
    }
}
