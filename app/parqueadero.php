<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parqueadero extends Model
{
    use Notifiable;

    protected $table = "parqueadero";

    protected $fillable = [
        'nombre', 'capacidad_vehiculos','cupos_disponibles','direccion',
    ];
}
