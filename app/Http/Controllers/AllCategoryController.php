<?php

namespace App\Http\Controllers;

use App\Models\allCategory;
use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$category = Category::orderBy('name', 'desc')->limit(10)->get();
        //return view('showCategories.index', compact('category'));
        $dato['categories'] = Category::paginate(10);
        return view('showCategories.index', $dato);
        //return view('showCategories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('allCategories.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\allCategory  $allCategory
     * @return \Illuminate\Http\Response
     */
    public function show(allCategory $allCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\allCategory  $allCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(allCategory $allCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\allCategory  $allCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, allCategory $allCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\allCategory  $allCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(allCategory $allCategory)
    {
        //
    }
}
