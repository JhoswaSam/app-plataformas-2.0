@extends('layouts.head');

@section('contenido')
    <h2>EDITAR ONG</h2>

    <form action="/ongs/{{$ong->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$ong->codigoOng}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <select  name="categoria" id="categoria">
                    <option value="{{$ong->categoria->id}}">{{$ong->categoria->nombreCad}}</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nombreCad}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Contacto</label>
            <input id="contacto" name="contacto" type="text" class="form-control" tabindex="2" value="{{$ong->nombreContacto}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="2" value="{{$ong->direccionOng}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" tabindex="2" value="{{$ong->telefonoOng}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$ong->descripcionOng}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input id="correo" name="correo" type="text" class="form-control" tabindex="2" value="{{$ong->correoOng}}">
        </div>
        <div class="mb-3">
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

        <a href="/ongs" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@endsection