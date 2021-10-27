<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'second_lastname',
        'eps',
        'address',
        'companion_name',
        'companion_lastname',
        'companion_cellphone',
        'medical_history',
        'reasons',
        'diagnostic',
        'covid_check',
        'administradores_id'
    ];

    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
}