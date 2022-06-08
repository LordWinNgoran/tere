<?php

namespace App\Models;

use App\Models\post;
use App\Models\conges;
use App\Models\abscence;
use App\Models\tacheQuotidienne;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class employes extends Model
{
    use HasFactory;
    protected $fillable = [
        'Photo',
        'Nom',
        'Prenom',
        'Entreprise',
        'Telephone',
        'Mobile',
        'Email',
        'Diplôme',
        'Spécialité',
        'id_post        e',
        'Nationalité',
        'Numero_CNI',
        'Numero_Passport',
        'Date_de_Naissance',
        'Lieu_de_Naissance',
        'Lieu_de_residence',
        'Sexe',
        'Statut_Matrimonial',
        'Nombre_enfants'
    ];

    public function postes()
    {
        return $this->belongsTo(post::class, 'id_poste');
    }


    public function tacheQuotidienne()
    {
        return $this->hasMany(tacheQuotidienne::class, 'id_employe');
    }

    public function absence()
    {
        return $this->hasMany(abscence::class, 'id_employe');
    }

    public function conges()
    {
        return $this->hasMany(conges::class, 'id_employe');
    }

    public function contrat()
    {
        return $this->hasMany(contrat::class, 'id_employe');
    }

}
