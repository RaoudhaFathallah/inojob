<?php

namespace App;
use App\Diplome;
use App\User;
use App\Offre;

use Illuminate\Database\Eloquent\Model;

class Diplome_User extends Model
{
        /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    public $table = 'diplome__users';
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $fillable = [
        'user_id','diplome_id'
    ];

    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
}
