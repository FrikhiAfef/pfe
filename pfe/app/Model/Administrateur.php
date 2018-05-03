<?php

namespace App\Model;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class administrateur extends Authenticatable
{
    use Notifiable;
}
