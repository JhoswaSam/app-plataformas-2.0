@extends('layouts.create-edit')

@section('contenido')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Categoria') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " style="padding: 3%;">

                    <div class="formbg">
                        <div class="padding-horizontal--48">
                            <form action="/categorias/{{$categoria->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$categoria->nombreCad}}">
                                </div>
                        
                                <a href="/categorias" class="btn-cancelar" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn-guardar" tabindex="4">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection