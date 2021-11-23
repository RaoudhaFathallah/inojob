<?php

namespace App;
use App\User;
use App\Offre;
use App\Parcours_Professionnel;
use Illuminate\Database\Eloquent\Model;

class Domaine_activite extends Model
{
    protected $fillable = ['nom'];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function parcours_professionnels()
    {
        return $this->hasMany(Parcours_Professionnel::class);
    }

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
