@extends('layouts.table-style')

@section('contenido')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ongs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 3%">
                <a href="ongs/create" class="btn-create">CREAR</a>

                <table id="ongs" style="width: 100%">
                    <thead style="background-color: #d3d4df;">
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
                    <tbody style="background-color: #ebebef;">
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
                                        <a class="btn-editar" href="/ongs/{{$ong->id}}/edit">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-borrar">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</x-app-layout>

@endsection

@section('js')
    <script>
        $(document).ready(function () {
        $('#ongs').DataTable({
            "lengthMenu":[[5,10,20,-1],[5,10,20,"All"]]
        });
    });
    </script>
@endsection