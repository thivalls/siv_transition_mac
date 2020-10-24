<?php

namespace App\Http\Controllers;

use App\Models\ProductOutput;
use Illuminate\Http\Request;

class ProductOutputController extends Controller
{
    public function index()
    {
        return ProductOutput::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $output = ProductOutput::create($request->all());
        return $output;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function show(ProductOutput $productOutput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductOutput $productOutput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductOutput $productOutput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductOutput  $productOutput
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductOutput $productOutput)
    {
        //
    }
}
