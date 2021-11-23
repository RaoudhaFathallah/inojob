<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Region;
use App\Offre;
use App\Parcours_Professionnel;
use App\Domaine_activite;
use App\Diplome;
use App\Diplome_User;
use App\Competence;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','region_id','genre','datenaissance','prenom','etat_civil','tel','image','experience','type_emploi','poste','domaine_activite','salaire','nb_experience','entreprise','rc','date_inscription','siteweb','description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'integer'
       
    ];   
    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }
    public function offres()
    {
        return $this->belongsToMany(Offre::class);
    }

    public function domaine_activites()
    {
        return $this->belongsToMany(Domaine_activite::class);
    }

    public function parcours_professionnels()
    {
        return $this->belongsToMany(Parcours_Professionnel::class);
    }
    public function diplomes()
    {
       return $this->belongsToMany(Diplome::class, 'diplome__users');

    }
    public function competences()
    {
        return $this->hasMany(Competence::class);
    }
}
