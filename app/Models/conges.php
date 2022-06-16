<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conges extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_employe" ,
        "Date_de_Debut" ,
        "Date_de_Fin",
        "Designation"
    ];
    public function employes()
    {
        return $this->belongsTo(employes::class, 'id_employe');
    }
}
