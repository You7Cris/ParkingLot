<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    use Notifiable;

    protected $table = "vehiculo";

    protected $fillable = [
        'placa', 'marca','color',
    ];
}
