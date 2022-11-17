@extends('layouts.head');

@section('contenido')
<a href="ongs/create" class="btn btn-primary">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
            <th scope="col">Nombre</th>
            <th scope="col">Contacto</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Correo</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ongs as $ong)
            <tr>
                <td>{{$ong->id}}</td>
                <td>{{$ong->categoria->nombreCad}}</td>
                <td>{{$ong->nombreOng}}</td>
                <td>{{$ong->nombreContacto}}</td>
                <td>{{$ong->direccionOng}}</td>
                <td>{{$ong->telefonoOng}}</td>
                <td>{{$ong->descripcionOng}}</td>
                <td>{{$ong->correoOng}}</td>
                @if ($ong->estadoOng)
                    <td>Activo</td>
                @else
                    <td>Inactivo</td>
                @endif
                <td>
                    <form action="{{route('ongs.destroy',$ong->id)}}" method="POST">
                        <a class="btn btn-info" href="/ongs/{{$ong->id}}/edit">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection