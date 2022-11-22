@extends('layouts.create-edit')

@section('contenido')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Ong') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " style="padding: 3%;">
                    
                    
                    <div class="formbg">
                        <div class="padding-horizontal--48">
                            <form action="/ongs/{{$ong->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Categoria</label>
                                    <select  name="categoria" id="categoria">
                                            <option value="{{$ong->categoria->id}}">{{$ong->categoria->nombreCad}}</option>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nombreCad}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Nombre</label>
                                    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$ong->nombreOng}}">
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Contacto</label>
                                    <input id="contacto" name="contacto" type="text" class="form-control" tabindex="2" value="{{$ong->nombreContacto}}">
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Direccion</label>
                                    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2" value="{{$ong->direccionOng}}">
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Telefono</label>
                                    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="2" value="{{$ong->telefonoOng}}">
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Descripcion</label>
                                    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$ong->descripcionOng}}">
                                </div>
                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Correo</label>
                                    <input id="correo" name="correo" type="text" class="form-control" tabindex="2" value="{{$ong->correoOng}}">
                                </div>

                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Foto</label>
                                    <img src="{{asset($ong->fotoOng)}}" alt="{{$ong->nombreOng}}">
                                    <input id="foto" name="foto" type="file" class="form-control" accept="image/*" tabindex="2">
                                </div>


                                <div class="field padding-bottom--24">
                                    <label for="" class="form-label">Estado</label>
                        
                                    <select  name="estado" id="estado">
                                        @if ($ong->estadoOng)
                                            <option value="{{$ong->estadoOng}}">Activo</option>
                                        @else
                                            <option value="{{$ong->estadoOng}}">Inactivo</option>
                                        @endif
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                      </select>
                                </div>
                        
                                <a href="/ongs" class="btn-cancelar" tabindex="5">Cancelar</a>
                                <button type="submit" class="btn-guardar" tabindex="4">Guardar</button>
                            </form>
                            
                      </div>
                    </div>



                </div>
            </div>
        </div>
    </x-app-layout>
@endsection