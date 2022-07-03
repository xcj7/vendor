<?php

namespace App\Http\Controllers;

use App\Models\VStockedProduct;
use App\Http\Requests\StoreVStockedProductRequest;
use App\Http\Requests\UpdateVStockedProductRequest;

class VStockedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreVStockedProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVStockedProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VStockedProduct  $vStockedProduct
     * @return \Illuminate\Http\Response
     */
    public function show(VStockedProduct $vStockedProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VStockedProduct  $vStockedProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(VStockedProduct $vStockedProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVStockedProductRequest  $request
     * @param  \App\Models\VStockedProduct  $vStockedProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVStockedProductRequest $request, VStockedProduct $vStockedProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VStockedProduct  $vStockedProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(VStockedProduct $vStockedProduct)
    {
        //
    }
}
