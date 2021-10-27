<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use Illuminate\Http\Request;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['hospitales'] = Administradores::paginate(1);
        return view('hospital.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
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
            'hospital_name' => 'required|string|max:50',
            'hospital_address' => 'required|string|max:100',
            'hospital_admin_name' => 'required|string|max:50',
            'hospital_admin_lastname' => 'required|string|max:50',
            'hospital_nit' => 'required|integer',
        ];

        $mensaje = [
            'hospital_name.required' => 'El nombre del hospital es requerido',
            'hospital_address.required' => 'La dirección del hospital es requerida',
            'hospital_admin_name.required' => 'El nombre del admin. del hospital es requerido',
            'hospital_admin_lastname.required' => 'El apellido del admin. del hospital es requerido',
            'hospital_nit.required' => 'El NIT del hospital es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        // $datosHospital = request()->all();
        $datosHospital = request()->except('_token');
        $cantidad = Administradores::all()->count();
        if ($cantidad < 1) {
            Administradores::insert($datosHospital);

            return redirect('hospital')->with('mensaje', 'Hospital creado exitosamente.');
        } else {
            return redirect('hospital')->with('mensaje', 'El hospital no se ha creado porque ya existe otro hospital.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function show(Administradores $administradores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospital = Administradores::findOrFail($id);
        return view('hospital.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosHospital = request()->except(['_token', '_method']);
        Administradores::where('id', '=', $id)->update($datosHospital);

        return redirect('hospital')->with('mensaje', 'Hospital modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Administradores::destroy($id);
        return redirect('hospital')->with('mensaje', 'Hospital eliminado exitosamente.');
    }
}