<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Diplome;
use App\Etablissement;
use App\Specialite;

class Parcours_Academique extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function diplomes()
    {
        return $this->belongsToMany(Diplome::class);
    }

    public function etablissements()
    {
        return $this->belongsToMany(Etablissement::class);
    }
    public function specialites()
    {
        return $this->belongsToMany(Specialite::class);
    }
}
