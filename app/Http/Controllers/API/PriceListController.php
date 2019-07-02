<?php

namespace App\Http\Controllers\API;

use App\PriceList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PriceList as PriceListResource;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PriceListResource::collection(PriceList::paginate(10));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function show(PriceList $priceList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function edit(PriceList $priceList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PriceList $priceList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PriceList  $priceList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceList $priceList)
    {
        //
    }
}
