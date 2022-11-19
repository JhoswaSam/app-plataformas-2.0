@extends('layouts.create-edit')



@section('contenido')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Nuevo Usuario') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg " style="padding: 3%;">
                    
                    
                    <div class="formbg">
                        <div class="padding-horizontal--48">
                            <form  action="/usuarios" method="POST">
                                    @csrf
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">User</label>
                                        <select  name="user" id="user">
                                            <option value="">Ninguno</option>
                                            @foreach ($users as $user)
                                                @if (!$user->usuario)
                                                    <option value="{{$user->id}}">{{$user->id}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
        
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">Rol</label>
                                        <select  name="rol" id="rol">
                                            <option value="1">Admin</option>
                                            <option value="0">Client</option>
                                          </select>
                                    </div>
                                    
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">Nombre</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
                                    </div>
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">Apellidos</label>
                                        <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="2">
                                    </div>
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">Dirrecion</label>
                                        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2">
                                    </div>
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">DNI</label>
                                        <input id="dni" name="dni" type="text" class="form-control" tabindex="2">
                                    </div>
                                    <div class="field padding-bottom--24">
                                        <label for="" class="form-label">Telefono</label>
                                        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="2">
                                    </div>
                                    
                                    
                            
                                    <a href="/usuarios" class="btn-cancelar" tabindex="5">Cancelar</a>
                                    <button type="submit" class="btn-guardar" tabindex="4">Guardar</button>
                                
                            </form>
                            
                      </div>
                    </div>



                </div>
            </div>
        </div>
    </x-app-layout>
@endsection