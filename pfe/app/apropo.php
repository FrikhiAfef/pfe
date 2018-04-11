<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apropo extends Model
{
    public function getRouteKeyName()
    {
        return 'titre';
    }
}
