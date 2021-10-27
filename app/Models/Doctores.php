<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctores extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'second_lastname',
        'address',
        'cellphone',
        'bloodtype',
        'expyears',
        'birhtday',
        'administradores_id'
    ];

    public function administradores()
    {
        return $this->belongsTo('App\Models\Administradores');
    }
}