<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->usuario) {
            $data = Ong::all();
            return view('ong.list')->with('ongs',$data);
        
        } else {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->user()->usuario) {
        
            $data = Categoria::all();
            return view('ong.create')->with('categorias',$data);
        } else {
            return redirect('/');
        }
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

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = 'img/ong/';
            $fileName = time().'-'.$file->getClientOriginalName();
            $fileSuccess = $request->file('foto')->move($path,$fileName);
            $ong->fotoOng = $path.$fileName;
        }
        
        $ong->categoria_id = $request->get('categoria');
        $ong->nombreOng = $request->get('nombre');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->user()->usuario) {
        
            $ong = Ong::find($id);
            $categorias = Categoria::all();
            return view('ong.edit')->with('ong',$ong)->with('categorias',$categorias);
        } else {
            return redirect('/');
        }
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

        
        
        if ($request->hasFile('foto')) {
            
            //Storage::delete('public'.$ong->fotoOng);
            
            File::delete($ong->fotoOng);

            $file = $request->file('foto');
            $path = 'img/ong/';
            $fileName = time().'-'.$file->getClientOriginalName();
            $fileSuccess = $request->file('foto')->move($path,$fileName);
            $ong->fotoOng = $path.$fileName;
        }

        $ong->categoria_id = $request->get('categoria');
        $ong->nombreOng = $request->get('nombre');
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
