<?php

namespace App\Http\Controllers\RessourceHumaine;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postes = post::all();
        return view('RessourceHumaine.Poste.index',compact('postes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RessourceHumaine.Poste.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'Departement'=>'required',
                'Poste_occupé'=>'required',
                'Superieur_Hierarchique'=>'required',
                'Vehicule_de_service'=>'required'
            ]
        );
        post::create($request->all());
        return redirect()->route('Poste.index')->with('success', 'Enregistrement reussi.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poste = post::find($id);
        return view('RessourceHumaine.Poste.edit',compact('poste'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'Departement'=>'required',
                'Poste_occupé'=>'required',
                'Superieur_Hierarchique'=>'required',
                'Vehicule_de_service'=>'required'
            ]
        );
        $poste = post::find($id);
        if($poste->update($request->all())){
            return redirect()->route('Poste.index')->with('success', 'Mise à jour effectuée.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
