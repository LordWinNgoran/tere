<?php

namespace App\Models;

use App\Models\Type_contrat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_type_contrats",
        "id_employe",
        "Salaire_Mensuel",
        "Date_Debut_Contrat",
        "Date_Fin_Contrat",
        "Nombre_Heures_de_Travail_Semaine",
    ];
    public function type_contrat()
    {
        return $this->belongsTo(TypeContract::class, 'id_type_contrats');
    }

    public function employe()
    {
        return $this->belongsTo(employes::class, 'id_type_contrats');
    }
}
