<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends Authenticatable
{
    use Notifiable;

    protected $table = 'Empleados';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'fechaNacimiento', 'lat', 'lon',
    ];
}
