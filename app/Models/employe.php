<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\cnss;
use App\Models\conge;

class employe extends Model
{
    protected $fillable = ['cin', 'nom', 'prenom', 'salaire', 'date_emb'];

    public function CNSS(){
        return $this->hasOne(cnss::class, 'cin', 'cin');
    }
    public function CONGE(){
        return $this->hasMany(conge::class, 'cin', 'cin');
    }
}
