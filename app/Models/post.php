<?php

namespace App\Models;

use App\Models\employes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'Departement',
        'Poste_occupé',
        'Superieur_Hierarchique',
        'Vehicule_de_service'
    ];

    public function Empoyer() {
        return $this->hasMany(employes::class,'id_poste');
    }
}
