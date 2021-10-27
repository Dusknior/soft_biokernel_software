<?php

namespace App\Http\Controllers;

use App\Models\Doctores;
use App\Models\Administradores;
use Illuminate\Http\Request;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['doctores'] = Doctores::paginate(50);
        return view('doctor.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosH['hospitales'] = Administradores::all();
        return view('doctor.create', $datosH);
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
            'address' => 'required|string|max:50',
            'cellphone' => 'required|integer',
            'bloodtype' => 'required|string|max:2',
            'expyears' => 'required|integer',
            'birhtday' => 'required|date',
            'administradores_id' => 'required',

        ];

        $mensaje = [
            'firstname.required' => 'El nombre del doctor es requerido',
            'lastname.required' => 'El apellido paterno del doctor es requerido',
            'second_lastname.required' => 'El apellido materno del doctor es requerido',
            'address.required' => 'La dirección del doctor es requerida',
            'cellphone.required' => 'El número de celular del doctor es requerido',
            'bloodtype.required' => 'El tipo de sangre del doctor es requerido',
            'expyears.required' => 'La cantidad de años de experiencia del doctor es requerida',
            'birhtday.required' => 'La fecha de cumpleaños del doctor es requerida',
            'administradores_id.required' => 'Es necesario que exista un hospital'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosDoctor = request()->except('_token');
        Doctores::insert($datosDoctor);

        return redirect('doctor')->with('mensaje', 'Doctor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function show(Doctores $doctores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosH['hospitales'] = Administradores::all();
        $doctor = Doctores::findOrFail($id);
        return view('doctor.edit', compact('doctor'), $datosH);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDoctor = request()->except(['_token', '_method']);
        Doctores::where('id', '=', $id)->update($datosDoctor);

        return redirect('hospital')->with('mensaje', 'Doctor modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctores  $doctores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctores::destroy($id);
        return redirect('doctor')->with('mensaje', 'Doctor eliminado exitosamente.');
    }
}