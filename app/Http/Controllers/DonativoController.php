<?php

namespace App\Http\Controllers;

use App\Models\Donativo;
use App\Models\Ong;
use App\Models\Usuario;
use Illuminate\Http\Request;

class DonativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Donativo::all();
        return view('donativo.list')->with('donativos',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::all();
        $ongs = Ong::all();
        return view('donativo.create')->with('usuarios',$usuarios)->with('ongs',$ongs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donativo = new Donativo();
        $donativo->usuario_id = $request->get('usuario');
        $donativo->ong_id = $request->get('ong');
        $donativo->cantidadDon = $request->get('cantidad');
        $donativo->descripcionDon = $request->get('descripcion');

        $donativo->save();

        return redirect('/donativos');
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
        $donativo = Donativo::find($id);
        $usuarios = Usuario::all();
        $ongs = Ong::all();
        return view('donativo.edit')->with('usuarios',$usuarios)->with('ongs',$ongs)->with('donativo',$donativo);
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
        $donativo = Donativo::find($id);
        $donativo->usuario_id = $request->get('usuario');
        $donativo->ong_id = $request->get('ong');
        $donativo->cantidadDon = $request->get('cantidad');
        $donativo->descripcionDon = $request->get('descripcion');

        $donativo->save();

        return redirect('/donativos');
    }

    public function donar($id)
    {
        $data = Ong::find($id);
        return view('client.donation')->with('ong',$data);
    }

    public function donarAction(Request $request, $id, $idClient)
    {
        $donativo = new Donativo();
        $donativo->usuario_id = $idClient;
        $donativo->ong_id = $id;
        $donativo->cantidadDon = $request->get('cantidad');
        $donativo->descripcionDon = $request->get('descripcion');

        $donativo->save();

        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donativo = Donativo::find($id);
        $donativo->delete();
        return redirect('/donativos');
    }
}
