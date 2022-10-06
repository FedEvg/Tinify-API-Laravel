<?php

namespace App\Http\Controllers;

use App\Models\BinanceFut;
use App\Http\Requests\StoreBinanceFutRequest;
use App\Http\Requests\UpdateBinanceFutRequest;

class BinanceFutController extends Controller
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
     * @param  \App\Http\Requests\StoreBinanceFutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBinanceFutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BinanceFut  $binanceFut
     * @return \Illuminate\Http\Response
     */
    public function show(BinanceFut $binanceFut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinanceFut  $binanceFut
     * @return \Illuminate\Http\Response
     */
    public function edit(BinanceFut $binanceFut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBinanceFutRequest  $request
     * @param  \App\Models\BinanceFut  $binanceFut
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBinanceFutRequest $request, BinanceFut $binanceFut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinanceFut  $binanceFut
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinanceFut $binanceFut)
    {
        //
    }
}
