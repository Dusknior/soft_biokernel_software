<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'second_lastname',
        'cellphone',
        'address',
        'ct_person_name',
        'ct_person_lastname',
        'administradores_id '
    ];

    public function administradores()
    {
        return $this->belongsTo('App\Models\Administradores');
    }

    public function pacientes()
    {
        return $this->hasOne('App\Models\Doctores');
    }
}