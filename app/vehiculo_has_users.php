<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo_has_users extends Model
{
    use Notifiable;

    protected $table = "entrada_salida";

    protected $fillable = [
        'vehiculo_id','usuario_id',
    ];
}
