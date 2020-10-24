<?php

namespace App\Http\Controllers;

use App\Models\ProductInput;
use Illuminate\Http\Request;

class ProductInputController extends Controller
{
    public function index()
    {
        return ProductInput::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = ProductInput::create($request->all());
        return $input;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function show(ProductInput $productInput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductInput $productInput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductInput $productInput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductInput  $productInput
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductInput $productInput)
    {
        //
    }
}
