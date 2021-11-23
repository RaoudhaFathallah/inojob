<?php

namespace App;
use App\User;
use App\Parcours_Academique;
use App\Offre;


use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    protected $fillable = ['nom'];

    public function users()
    {
        return $this->belongsToMany(User::class);

    }
    public function parcours_academiques()
    {
        return $this->hasMany(Parcours_Academique::class);
    }
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
