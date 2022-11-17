@extends('layouts.head');

@section('contenido')
<a href="categorias/create" class="btn btn-primary">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombreCad}}</td>
                <td>
                    <form action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
                        <a class="btn btn-info" href="/categorias/{{$categoria->id}}/edit">Editar</a>
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