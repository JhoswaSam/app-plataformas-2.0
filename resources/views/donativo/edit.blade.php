@extends('layouts.create-edit')


@section('contenido')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Donativo') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " style="padding: 3%;">
                    
                    
                    <div class="formbg">
                        <div class="padding-horizontal--48">
                            <form action="/donativos/{{$donativo->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Usuario</label>
                                    <select  name="usuario" id="usuario">
                                        <option value="{{$donativo->usuario_id}}">{{$donativo->usuario_id}}</option>
                                        @foreach ($usuarios as $usuario)
                                            <option value="{{$usuario->id}}">{{$usuario->id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Ong</label>
                                    <select  name="ong" id="ong">
                                        <option value="{{$donativo->ong_id}}">{{$donativo->ong->nombreOng}}</option>
                                        @foreach ($ongs as $ong)
                                            <option value="{{$ong->id}}">{{$ong->nombreOng}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Cantidad</label>
                                    <input id="cantidad" name="cantidad" value="{{$donativo->cantidadDon}}" type="number" class="form-control" tabindex="2">
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Descripcion</label>
                                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$donativo->descripcionDon}}">
                                </div>
                        
                                <a href="/donativos" class="btn-cancelar" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn-guardar" tabindex="4">Guardar</button>
                            </form>
                            
                      </div>
                    </div>



                </div>
            </div>
        </div>
    </x-app-layout>
@endsection