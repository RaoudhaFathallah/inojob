<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Domaine_activite;
use App\Poste;
use App\Competence;

class Parcours_Professionnel extends Model
{
    protected $table = 'parcours_professionnels';

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function postes()
    {
        return $this->belongsToMany(Poste::class);
    }
    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }
    public function domaine_activites()
    {
        return $this->belongsToMany(Domaine_activite::class);
    }
}
