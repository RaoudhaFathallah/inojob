<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Langue;

class Niveau_Langue extends Model
{
    public function langues()

    {
        return $this->belongsTo(Langue::class);

    }
}
