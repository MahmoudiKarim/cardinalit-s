<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\cnss;
use App\Models\conge;
use App\Models\employe;

class cnss extends Model
{
    protected $fillable = ['mat', 'date_mat', 'cin'];

    public function EMPLOYE(){
        return $this->belongsTo(employe::class);
    }
}
