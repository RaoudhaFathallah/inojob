<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Niveau_Langue;
class Langue extends Model
{
    public function niveau_langues()

    {
        return $this->hasOne(Niveau_Langue::class);

    }
}
