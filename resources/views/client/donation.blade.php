@extends('layouts.head');

@section('contenido')
    <div class="container-fluid">
        <h1>Donar {{$ong->nombreOng}}</h1>
        <form action="./donar/{{$idClient=1}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Cantidad</label>
                <input id="cantidad" name="cantidad" value="0.00" type="number" class="form-control" tabindex="2">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion</label>
                <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
            </div>

            <a href="/list" class="btn btn-secondary" tabindex="5">Cancelar</a>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
        </form>
    </div>


@endsection
