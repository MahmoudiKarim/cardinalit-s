<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $fillable = ['numE', 'nomE', 'prenomE'];
    
    public function MATIERE(){
        return $this->belongstomany(matiere::class, 'evaluers', 'numE', 'codeM', 'numE', 'codeM')->withPivot('note');
    }
}
