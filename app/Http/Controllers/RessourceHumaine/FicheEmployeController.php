<?php

namespace App\Http\Controllers\RessourceHumaine;

use App\Http\Controllers\Controller;
use App\Models\employes;
use Illuminate\Http\Request;

class FicheEmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = employes::all();
         return view('RessourceHumaine.Employe.index',compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RessourceHumaine.Employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'Photo',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Entreprise' => 'required',
            'Telephone' => 'required',
            'Mobile' => 'required',
            'Email' => 'required',
            'Diplôme' => 'required',
            'Spécialité' => 'required',
            'id_poste' => 'required|exists:posts,id',
            'Nationalité' => 'required',
            'Numero_CNI' => 'required',
            'Numero_Passport' => 'required',
            'Date_de_Naissance' => 'required',
            'Lieu_de_Naissance' => 'required',
            'Lieu_de_residence' => 'required',
            'Sexe' => 'required',
            'Statut_Matrimonial' => 'required',
            'Nombre_enfants' => 'required'
        ]);

        employes::create($request->all());
        return redirect()->route('Employé.index')->with('success', 'Enregistrement reussi.');
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
        return view('RessourceHumaine.Employe.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
