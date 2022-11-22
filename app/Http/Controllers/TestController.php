<?php

namespace App\Http\Controllers;

use App\Models\Donativo;
use App\Models\Ong;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Funcion que nos retorna el index para el cliente guardando datos del context como es el usuario
     */
    public function index(Request $request)
    {
        return view('test.test', [
            'user' => $request->user(),
        ]);
    }


    /**
     * Funcion que nos retorna el index para el cliente guardando datos del context como es el usuario
     */
    public function about(Request $request)
    {
        return view('test.about', [
            'user' => $request->user(),
        ]);
    }


    /**
     * Funcion que nos retorna el index para el cliente guardando datos del context como es el usuario
     */
    public function contact(Request $request)
    {
        return view('test.contact', [
            'user' => $request->user(),
        ]);
    }


    /**
     * Funcion que nos retorna a la vista donde se van a listar todas las ongs  
     */
    public function services(Request $request)
    {
        $data = Ong::all();
        return view('test.list-ong', [
            'user' => $request->user(),
            'ongs' => $data
        ]);
    }


    /**
     * Funcion para listar las donaciones de un usuario y su perfil
     */
    public function profile(Request $request)
    {
        $donaciones = $request->user()->donaciones;
        return view('test.profile', [
            'user'=>$request->user(),
            'donaciones' => $donaciones
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Funcion que nos retorna a la vista donde se describe la ong
     */
    public function show(Request $request, $id)
    {
        $data = Ong::find($id);
        return view('test.description-ong', [
            'user' => $request->user(),
            'ong' => $data
        ]);
    }


    /**
     * Funcion que nos retorna a la vista donde realizaremos el pago a la donacion
     */
    public function payment(Request $request, $id)
    {
        
        $data = Ong::find($id);
        return view('test.success-donation', [
            'user' => $request->user(),
            'ong' => $data
        ]);
        
    }

    public function paymentAction(Request $request, $id)
    {
        $donativo = new Donativo();
        $donativo->user_id = $request->user()->id;
        $donativo->ong_id = $id;
        $donativo->cantidadDon = $request->get('cantidad');
        $donativo->descripcionDon = $request->get('descripcion');

        $donativo->save();

        return redirect('/');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
