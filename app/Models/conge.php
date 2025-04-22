<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\cnss;
use App\Models\conge;

class conge extends Model
{
    protected $fillable = ['duree', 'date_conge', 'cin'];

    public function EMPLOYE(){
        return $this->belongsTo(employe::class);
    }
}
