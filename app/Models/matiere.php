<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    protected $fillable = ['codeM', 'nomM', 'coeff'];
    
    public function ETUDIANT(){
        return $this->belongToMany(etudiant::class, 'evaluers', 'numE', 'codeM', 'numE', 'codeM')->withPivot('note');
    }
}
