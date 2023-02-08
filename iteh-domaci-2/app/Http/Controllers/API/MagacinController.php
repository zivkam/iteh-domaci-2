<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Magacin;
use Illuminate\Http\Request;
use App\Http\Resources\MagacinResource;

class MagacinController extends Controller
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
     * @param  \App\Models\Magacin  $magacin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $magacin = Magacin::find($id);
        return new MagacinResource($magacin);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magacin  $magacin
     * @return \Illuminate\Http\Response
     */
    public function edit(Magacin $magacin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magacin  $magacin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magacin $magacin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magacin  $magacin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $magacin = Magacin::find($id);
        if ($magacin) {
            $magacin->delete();
            return response()->json(['Magacin je obrisan iz baze!', new MagacinResource($magacin)]);
        } else {
            return response()->json('Brisanje nije izvrseno, proverite da li magacin sa ovim ID-em postoji u bazi');
        }
    }

}
