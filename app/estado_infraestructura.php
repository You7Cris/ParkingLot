<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado_infraestructura extends Model
{
    use Notifiable;

    protected $table = "estado_infraestructura";

    protected $fillable = [
        'tipo_necesidad', 'descripcion','prioridad',
    ];
}
