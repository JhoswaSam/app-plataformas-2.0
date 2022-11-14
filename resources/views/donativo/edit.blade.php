@extends('layouts.head');

@section('contenido')
    <h2>EDITAR DONATIVO</h2>

    <form action="/donativos/{{$donativo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$donativo->codigoDon}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Usuario</label>
            <select  name="usuario" id="usuario">
                <option value="{{$donativo->usuario_id}}">{{$donativo->usuario->codigoUs}}</option>
                @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->codigoUs}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ong</label>
            <select  name="ong" id="ong">
                <option value="{{$donativo->ong_id}}">{{$donativo->ong->nombreOng}}</option>
                @foreach ($ongs as $ong)
                    <option value="{{$ong->id}}">{{$ong->nombreOng}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input id="cantidad" name="cantidad" value="{{$donativo->cantidadDon}}" type="number" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$donativo->descripcionDon}}">
        </div>

        <a href="/donativos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection