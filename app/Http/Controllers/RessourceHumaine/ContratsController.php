<?php

namespace App\Http\Controllers\RessourceHumaine;

use App\Models\contrat;
use App\Models\TypeContract;
use Illuminate\Http\Request;
use Doctrine\DBAL\Types\Type;
use App\Http\Controllers\Controller;
use App\Models\employes;

class ContratsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrats = contrat::with('type_contrat','employe')->get();

        return view('RessourceHumaine.Contrat.index',compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_contracts = TypeContract::all();
        $employes = employes::all();
        return view('RessourceHumaine.Contrat.create',compact('type_contracts','employes'));
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
                "id_type_contrats" => 'required',
                "id_employe" => 'required',
                "Salaire_Mensuel" => 'required',
                "Date_Debut_Contrat" => 'required',
                "Date_Fin_Contrat" => 'required',
                "Nombre_Heures_de_Travail_Semaine" => 'required',
            ]
        );

        contrat::create($request->all());
        return redirect()->route('Contrats.index')->with('success', 'Enregistrement reussi.');
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
        $contrat = contrat::find($id);
        return view('RessourceHumaine.Contrat.edit',compact('contrat'));
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
                "id_type_contrats" => 'required',
                "id_employe" => 'required',
                "Salaire_Mensuel" => 'required',
                "Date_Debut_Contrat" => 'required',
                "Date_Fin_Contrat" => 'required',
                "Nombre_Heures_de_Travail_Semaine" => 'required',
            ]
        );
        $contrat = contrat::find($id);
        $contrat->update($request->all());
        return redirect()->route('Contrats.index')->with('success', 'Mise à jour effectuée !');
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
