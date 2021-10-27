<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administradores extends Model
{
    protected $fillable = [
        'hospital_name',
        'hospital_address',
        'hospital_admin_name',
        'hospital_admin_lastname',
        'hospital_nit'
    ];

    public function doctores()
    {
        return $this->hasMany('App\Models\Doctores');
    }

    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario');
    }
}