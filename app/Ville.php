<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Offre;

class Ville extends Model
{
    protected $fillable = ['name'];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
