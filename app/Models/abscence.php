<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abscence extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_employe',
        'Date_absence',
        'Motif',
        'validé'
    ];
    public function employes()
    {
        return $this->belongsTo(employes::class, 'id_employe');
    }
}
