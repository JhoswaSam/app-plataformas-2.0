@extends('layouts.head');

@section('contenido')
    <h2>CREAR DONATIVO</h2>
    <form action="/donativos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <select  name="usuario" id="usuario">
                @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->codigoUs}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ong</label>
            <select  name="ong" id="ong">
                @foreach ($ongs as $ong)
                    <option value="{{$ong->id}}">{{$ong->nombreOng}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" value="0.00" type="number" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
        </div>

        <a href="/donativos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection