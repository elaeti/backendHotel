<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Exception;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::orderByDesc('id')->get();
        return  $personnes->toJson(JSON_PRETTY_PRINT);
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
        $personne = new Personne();
        $data = $request->validate([
            'ref' => 'required',
            'user_id' => 'required',
            'photo' => 'required',
            'idcard' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'nationalite' => 'required'
        ]);


        $personne->ref = $data['ref'];
        $personne->user_id = $data['user_id'];
        $personne->photo = $data['photo'];
        $personne->idcard = $data['idcard'];
        $personne->nom = $data['nom'];
        $personne->prenom = $data['prenom'];
        $personne->genre = $data['genre'];
        $personne->email = $data['email'];
        $personne->telephone = $data['telephone'];
        $personne->adresse = $data['adresse'];
        $personne->nationalite = $data['nationalite'];

        $personne->save();
        return response()->json([
        'success' => 'la personne à ete crée avec success',
    ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function show(Personne $personne)
    {
        $personne = Personne::findOrFail($personne->id);
        try{
            return $personne->toJson(JSON_PRETTY_PRINT);
        }catch (Exception $exception){
            return response()->json([
                'error' => 'la personne n\'existe pas'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function edit(Personne $personne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personne $personne)
    {
        $data = $request->validate([
            'ref' => 'required',
            'user_id' => 'required',
            'photo' => 'required',
            'idcard' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'nationalite' => 'required',
        ]);

        $personne->ref = $data['ref'];
        $personne->user_id = $data['user_id'];
        $personne->photo = $data['photo'];
        $personne->idcard = $data['idcard'];
        $personne->nom = $data['nom'];
        $personne->prenom = $data['prenom'];
        $personne->genre = $data['genre'];
        $personne->email = $data['email'];
        $personne->telephone = $data['telephone'];
        $personne->adresse = $data['adresse'];
        $personne->nationalite = $data['nationalite'];
        $personne->save();
        return response()->json([
            'success' => 'la personne  à ete modifier avec success',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personne  $personne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personne $personne)
    {
         $personne->delete();
        return response()->json([
            'success' => 'la personne à ete supprime avec success',
        ], 200);
    }
    }