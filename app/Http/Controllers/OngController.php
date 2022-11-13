<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ong;
use Illuminate\Http\Request;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ong::all();
        return view('ong.list')->with('ongs',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Categoria::all();
        return view('ong.create')->with('categorias',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ong = new Ong();
        $ong->codigoOng = $request->get('codigo');
        $ong->categoria_id = $request->get('categoria');
        $ong->nombreContacto = $request->get('contacto');
        $ong->direccionOng = $request->get('direccion');
        $ong->telefonoOng = $request->get('telefono');
        $ong->descripcionOng = $request->get('descripcion');
        $ong->correoOng = $request->get('correo');
        $ong->estadoOng = boolval($request->get('estado'));

        $ong->save();

        return redirect('/ongs');
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
        $ong = Ong::find($id);
        $categorias = Categoria::all();
        return view('ong.edit')->with('ong',$ong)->with('categorias',$categorias);
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
        $ong = Ong::find($id);
        $ong->codigoOng = $request->get('codigo');
        $ong->categoria_id = $request->get('categoria');
        $ong->nombreContacto = $request->get('contacto');
        $ong->direccionOng = $request->get('direccion');
        $ong->telefonoOng = $request->get('telefono');
        $ong->descripcionOng = $request->get('descripcion');
        $ong->correoOng = $request->get('correo');
        $ong->estadoOng = boolval($request->get('estado'));

        $ong->save();

        return redirect('/ongs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ong = Ong::find($id);
        $ong->delete();
        return redirect('/ongs');
    }
}
