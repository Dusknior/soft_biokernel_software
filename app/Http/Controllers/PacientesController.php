<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use App\Models\Doctores;
use App\Models\Pacientes;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datosH['hospitales'] = Administradores::all();
        $datosD['doctores'] = Doctores::all();
        $datosU['usuarios'] = Usuario::all();
        return view('paciente.index', $datosD, $datosU);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosU['usuarios'] = Usuario::all();
        return view('paciente.create', $datosU);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'second_lastname' => 'required|string|max:50',
            'eps' => 'required|string|max:50',
            'address' => 'required|string|max:50',
            'companion_name' => 'nullable|string|max:50',
            'companion_lastname' => 'nullable|string|max:50',
            'companion_cellphone' => 'nullable|integer',
            'medical_history' => 'nullable|string',
            'reasons' => 'required|string',
            'diagnostic' => 'required|string',
            'usuarios_id' => 'required'
        ];

        $mensaje = [
            'firstname.required' => 'El nombre del paciente es requerido',
            'lastname.required' => 'El apellido paterno del paciente es requerido',
            'second_lastname.required' => 'El apellido materno del paciente es requerido',
            'eps.required' => 'La EPS del paciente es requerido',
            'address.required' => 'La dirección del paciente es requerida',
            'reasons.required' => 'El motivo de consulta del paciente es requerido',
            'diagnostic.required' => 'El diagnostico de la consulta del paciente es requerido',
            'usuarios_id.required' => 'Es necesario que exista un usuario',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosPaciente = request()->except('_token');
        Pacientes::insert($datosPaciente);

        return view('paciente.covid_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $pacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacientes $pacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacientes $pacientes)
    {
        //
    }
}