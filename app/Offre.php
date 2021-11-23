<?php

namespace App;
use App\User;
use App\Domaine_activite;
use App\Region;
use App\Competence;
use App\Diplome;
use App\Etablissement;
use App\Poste;
use App\Ville;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function domaine_activites()
    {
        return $this->belongsToMany(Domaine_activite::class);
    }
    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }
    public function etablissements()
    {
        return $this->belongsToMany(Etablissement::class);
    }
    public function diplomes()
    {
        return $this->belongsToMany(Diplome::class);
    }
    public function postes()
    {
        return $this->belongsToMany(Poste::class);
    }
    public function villes()
    {
        return $this->belongsToMany(Ville::class);
    }
    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }
}
