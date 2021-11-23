<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Parcours_Professionnel;
use App\Offre;
class Poste extends Model
{
    public function parcours_professionnels()
    {
        return $this->hasMany(Parcours_Professionnel::class);
    }
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
