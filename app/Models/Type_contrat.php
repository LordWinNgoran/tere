<?php

namespace App\Models;

use App\Models\contrat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_contrat extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function contrat(){
        return $this->hasMany(contrat::class,'id_type_contrats');
    }
}
