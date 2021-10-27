<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Administradores;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['usuarios'] = Usuario::paginate(50);
        return view('usuario.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosH['hospitales'] = Administradores::all();
        return view('usuario.create', $datosH);
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
            'cellphone' => 'required|integer',
            'address' => 'required|string|max:50',
            'ct_person_name' => 'required|string|max:50',
            'ct_person_lastname' => 'required|string|max:50',
            'administradores_id' => 'required',

        ];

        $mensaje = [
            'firstname.required' => 'El nombre del usuario es requerido',
            'lastname.required' => 'El apellido paterno del usuario es requerido',
            'second_lastname.required' => 'El apellido materno del usuario es requerido',
            'cellphone.required' => 'El número de celular del usuario es requerido',
            'address.required' => 'La dirección del usuario es requerida',
            'ct_person_name.required' => 'El nombre de la persona de contacto del usuario es requerido',
            'ct_person_lastname.required' => 'El apellido de la persona de contacto del usuario es requerido',
            'administradores_id.required' => 'Es necesario que exista un hospital',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosUsuario = request()->except('_token');
        Usuario::insert($datosUsuario);

        return redirect('usuario')->with('mensaje', 'Usuario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosH['hospitales'] = Administradores::all();
        $usuario = Usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'), $datosH);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosUsuario = request()->except(['_token', '_method']);
        Usuario::where('id', '=', $id)->update($datosUsuario);

        return redirect('usuario')->with('mensaje', 'Uusario modificado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('usuario')->with('mensaje', 'Usuario eliminado exitosamente.');
    }
}