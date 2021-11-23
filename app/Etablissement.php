<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Offre;

class Etablissement extends Model
{
    protected $fillable = ['name'];

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
