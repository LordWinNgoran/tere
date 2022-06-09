<?php
namespace App\Http\Controllers\RessourceHumaine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\employes;
use App\Models\tacheQuotidienne;

class FeuilleTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tacheQuotidienne::with('employes')->get();
        return view('RessourceHumaine.FeuilleTravail.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = employes::all();

        return view('RessourceHumaine.FeuilleTravail.create',compact('emp'));

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
                "id_employe" => 'required',
                "Date_du_jour" => 'required',
                "Description_de_activité" => 'required',
                "Tranche_horaire" => 'required',
            ]
        );

        tacheQuotidienne::create($request->all());
        return redirect()->route('feuille_travail.index')->with('success', 'Enregistrement reussi.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = tacheQuotidienne::with('employes')->find($id);
        return view('RessourceHumaine.FeuilleTravail.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tacheQuotidienne::with('employes')->find($id);
        $emp = employes::all();
        return view('RessourceHumaine.FeuilleTravail.edit',compact('data','emp'));

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
        $data = tacheQuotidienne::find($id);
        $request->validate(
            [
                "id_employe" => 'required',
                "Date_du_jour" => 'required',
                "Description_de_activité" => 'required',
                "Tranche_horaire" => 'required',
            ]
        );

        $data->update($request->all());
        return redirect()->route('feuille_travail.index')->with('success', 'Mise à jour effectuée.');
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
