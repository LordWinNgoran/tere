<?php

namespace App\Models;

use App\Models\employes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tacheQuotidienne extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_employe",
        "Date_du_jour",
        "Description_de_activité",
        "Tranche_horaire",
    ];
    public function employes()
    {
        return $this->belongsTo(employes::class, 'id_employe');
    }
}
