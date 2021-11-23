<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competence;
class Score extends Model
{
    //use HasFactory;

   // protected $fillable = ['name'];
   public function competences()
   {
       return $this->belongsToMany('App\Competence');
   }
}