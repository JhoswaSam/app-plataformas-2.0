<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuario;
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
        $data = Usuario::all();
        return view('usuario.list')->with('usuarios',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();
        return view('usuario.create')->with('users',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->user_id =  $request->get('user');
        $usuario->nombreUs = $request->get('nombre');
        $usuario->apellidosUs = $request->get('apellidos');
        $usuario->direccionUs = $request->get('direccion');
        $usuario->dniUs = $request->get('dni');
        $usuario->telefonoUs = $request->get('telefono');

        $usuario->save();

        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::all();
        $usuario = Usuario::find($id);
        return view('usuario.edit')->with('usuario',$usuario)->with('users',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->user_id =  $request->get('user');
        $usuario->nombreUs = $request->get('nombre');
        $usuario->apellidosUs = $request->get('apellidos');
        $usuario->direccionUs = $request->get('direccion');
        $usuario->dniUs = $request->get('dni');
        $usuario->telefonoUs = $request->get('telefono');

        $usuario->save();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
