<?php

namespace App\Http\Controllers;

use App\Models\Annex;
use Illuminate\Http\Request;

class AnnexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annexes = Annex::with('entreprisesAnnex')
            ->get();
        return $annexes->toJson(JSON_PRETTY_PRINT);
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
        $annex = new Annex();
             $data = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'ca' => 'required',
            'infocompte' => 'required',
            'nbr_employee' => 'required',
            'gerant' => 'required',
            'date_ouverture' => 'required',

            ]);
         $d = new \DateTime();
         $annex->date_ouverture = $d;
         $annex->nom = $data['nom'];
         $annex->adresse = $data['adresse'];
         $annex->telephone = $data['telephone'];
         $annex->email = $data['email'];
         $annex->ca = $data['ca'];
         $annex->infocompte = $data['infocompte'];
         $annex->nbr_employee = $data['nbr_employee'];
         $annex->gerant = $data['gerant'];
         $annex->entreprise_id = $request->entreprise_id;

        $annex->save();
        return  $annex->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Annex  $annex
     * @return \Illuminate\Http\Response
     */
    public function show(Annex $annex)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annex  $annex
     * @return \Illuminate\Http\Response
     */
    public function edit(Annex $annex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annex  $annex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annex $annex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annex  $annex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annex $annex)
    {
        //
    }
}