<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Prodavnica;
use Illuminate\Http\Request;
use App\Http\Resources\ProdavnicaResource;

class ProdavnicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodavnice = Prodavnica::all();
        return ProdavnicaResource::collection($prodavnice); 

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
     * @param  \App\Models\Prodavnica  $prodavnica
     * @return \Illuminate\Http\Response
     */
    public function show(Prodavnica $prodavnica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodavnica  $prodavnica
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodavnica $prodavnica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodavnica  $prodavnica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodavnica $prodavnica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodavnica  $prodavnica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prodavnica $prodavnica)
    {
        //
    }
}
