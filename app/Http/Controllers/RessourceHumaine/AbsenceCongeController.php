<?php

namespace App\Http\Controllers\RessourceHumaine;

use App\Http\Controllers\Controller;
use App\Models\abscence;
use App\Models\conges;
use App\Models\employes;
use Illuminate\Http\Request;

class AbsenceCongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = employes::all();
        $count1 = abscence::where("validé","=","en cours")->get()->count();
        $count2 = conges::all()->count();
        $count3 = abscence::where("validé","=","oui")->get()->count();
        $count4 = abscence::where("validé","=","non")->get()->count();
        $absences = abscence::with('employes')->get();
        $conges = conges::with('employes')->get();
        return view('RessourceHumaine.AbsenceConge.index', compact('datas', 'count1', 'count2','count3', 'count4', 'absences', 'conges'));
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

        if ($request->demande === "absence") {
            $request->validate(
                [
                    "id_employe" => "required",
                    "Date_absence" => "required",
                    "Motif" => "required",
                ]
            );
            abscence::create($request->all());
            return redirect()->route('absence_conges.index')->with('success', 'Enregistrement de la demande d\'absence .');
        } elseif ($request->demande === "conge") {
            $request->validate(
                [
                    "id_employe" => "required",
                    "Date_de_Debut" => "required",
                    "Date_de_Fin" => "required",
                    "Designation" => "required"
                ]
            );
            conges::create($request->all());
            return redirect()->route('absence_conges.index')->with('success', 'Enregistrement de la demande de congé.');
        }

        // dd($request->all());
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
        //
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
        $absence = abscence::find($id);
        //dd($absence);
        if ($absence->update(["validé" => $request->validé])) {
            return redirect()->route('absence_conges.index')->with('success', 'Mise à jour effectuée.');
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
