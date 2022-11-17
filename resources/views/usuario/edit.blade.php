@extends('layouts.head');

@section('contenido')
    <h2>EDITAR USUARIO</h2>

    <form action="/usuarios/{{$usuario->id}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$usuario->nombreUs}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input id="apellidos" name="apellidos" type="text" class="form-control" tabindex="2" value="{{$usuario->apellidosUs}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dirrecion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2" value="{{$usuario->direccionUs}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">DNI</label>
            <input id="dni" name="dni" type="text" class="form-control" tabindex="2" value="{{$usuario->dniUs}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" tabindex="2" value="{{$usuario->telefonoUs}}">
        </div>

        <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection