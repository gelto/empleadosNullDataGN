<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Domicilio extends Authenticatable
{
    use Notifiable;

    protected $table = 'Domicilios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias', 'domicilio', 'lat', 'lon',
    ];
}
