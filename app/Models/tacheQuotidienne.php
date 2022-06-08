<?php

namespace App\Models;

use App\Models\employes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tacheQuotidienne extends Model
{
    use HasFactory;

    protected $fillable = [];
    public function employes()
    {
        return $this->belongsTo(employes::class, 'id_employe');
    }
}
