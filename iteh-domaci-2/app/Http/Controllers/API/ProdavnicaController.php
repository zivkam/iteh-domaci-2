<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Prodavnica;
use Illuminate\Http\Request;
use App\Http\Resources\ProdavnicaResource;
use Illuminate\Support\Facades\Validator;

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
    public function show($id)
    {
        $prodavnica = Prodavnica::find($id);
        return new ProdavnicaResource($prodavnica);

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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'website' => 'required|string',
            'godina' => 'required|integer',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $prodavnica = Prodavnica::find($id);

        if ($prodavnica) {
            $prodavnica->naziv = $request->naziv;
            $prodavnica->website = $request->website;
            $prodavnica->godina = $request->godina;
            $prodavnica->email= $request->email;


            $prodavnica->save();

            return response()->json(['Podaci o prodavnici su azurirani!',new ProdavnicaResource($prodavnica)]);
        } else {
            return response()->json('Podaci o prodavnici nisu uspesno azurirani!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodavnica  $prodavnica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodavnica = Prodavnica::find($id);
        if ($prodavnica) {
            $prodavnica->delete();
            return response()->json(['Prodavnica je obrisana iz baze!', new ProdavnicaResource($prodavnica)]);
        } else {
            return response()->json('Brisanje nije izvrseno, proverite da li prodavnica sa ovim ID-em postoji u bazi');
        }
    }

}
