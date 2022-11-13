@extends('layouts.head');

@section('contenido')
    <h2>CREAR CATEGORIA</h2>
    <form action="/categorias" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
        </div>

        <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection