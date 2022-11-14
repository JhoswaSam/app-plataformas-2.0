@extends('layouts.head');

@section('contenido')
<a href="donativos/create" class="btn btn-primary">CREAR</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width: 100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Codigo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Ong</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Creacion</th>
            <th scope="col">Actualizacion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($donativos as $donativo)
            <tr>
                <td>{{$donativo->id}}</td>
                <td>{{$donativo->codigoDon}}</td>
                <td>{{$donativo->usuario->codigoUs}}</td>
                <td>{{$donativo->ong->nombreOng}}</td>
                <td>{{$donativo->cantidadDon}}</td>
                <td>{{$donativo->descripcionDon}}</td>
                <td>{{$donativo->created_at}}</td>
                <td>{{$donativo->updated_at}}</td>
                <td>
                    <form action="{{route('donativos.destroy',$donativo->id)}}" method="POST">
                        <a class="btn btn-info" href="/donativos/{{$donativo->id}}/edit">Editar</a>
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