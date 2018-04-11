<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    public function getRouteKeyName()
    {
        return 'titre';
    }
}
