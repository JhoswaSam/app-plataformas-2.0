@extends('layouts.head');

@section('contenido')
<a href="usuarios/create" class="btn btn-primary">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Direccion</th>
            <th scope="col">DNI</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombreUs}}</td>
                <td>{{$usuario->apellidosUs}}</td>
                <td>{{$usuario->direccionUs}}</td>
                <td>{{$usuario->dniUs}}</td>
                <td>{{$usuario->telefonoUs}}</td>
                <td>
                    <form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
                        <a class="btn btn-info" href="/usuarios/{{$usuario->id}}/edit">Editar</a>
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