<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Parcours_Professionnel;
use App\User;
use App\Offre;
use App\Score; 

class Competence extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
    public function scores()
    {
        return $this->belongsToMany('App\Score');
    }
}
