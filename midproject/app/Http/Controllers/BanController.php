<?php

namespace App\Http\Controllers;

use App\Models\ban;
use App\Http\Requests\StorebanRequest;
use App\Http\Requests\UpdatebanRequest;

class BanController extends Controller
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
     * @param  \App\Http\Requests\StorebanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function show(ban $ban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function edit(ban $ban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebanRequest  $request
     * @param  \App\Models\ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebanRequest $request, ban $ban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function destroy(ban $ban)
    {
        //
    }
}
