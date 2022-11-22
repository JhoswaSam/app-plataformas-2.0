<?php

namespace App\Http\Controllers;

use App\Models\Donativo;
use App\Models\Ong;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;

class DonativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->user()->usuario) {
            $data = Donativo::all();
            return view('donativo.list')->with('donativos',$data);
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
            $usuarios = User::all();
            $ongs = Ong::all();
            return view('donativo.create')->with('usuarios',$usuarios)->with('ongs',$ongs);
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
        $donativo = new Donativo();
        $donativo->user_id = $request->get('usuario');
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
    public function edit(Request $request, $id)
    {
        if ($request->user()->usuario) {
        
            $donativo = Donativo::find($id);
            $usuarios = Usuario::all();
            $ongs = Ong::all();
            return view('donativo.edit')->with('usuarios',$usuarios)->with('ongs',$ongs)->with('donativo',$donativo);
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
        $donativo = Donativo::find($id);
        $donativo->usuario_id = $request->get('usuario');
        $donativo->ong_id = $request->get('ong');
        $donativo->cantidadDon = $request->get('cantidad');
        $donativo->descripcionDon = $request->get('descripcion');

        $donativo->save();

        return redirect('/donativos');
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
