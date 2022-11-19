@extends('layouts.table-style')


@section('contenido')
    
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Usuarios') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 3%">
                    <a href="usuarios/create" class="btn-create">CREAR</a>

                    <table id="usuarios"  style="width: 100%">
                        <thead style="background-color: #d3d4df;">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">DNI</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #ebebef;">
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->id}}</td>
                                    @if ($usuario->user)
                                        <td>{{$usuario->user->id}}</td>
                                    @else
                                        <td>Ninguno</td>
                                    @endif
                                    <td>{{$usuario->nombreUs}}</td>
                                    <td>{{$usuario->apellidosUs}}</td>
                                    <td>{{$usuario->direccionUs}}</td>
                                    <td>{{$usuario->dniUs}}</td>
                                    <td>{{$usuario->telefonoUs}}</td>
                                    <td>{{$usuario->rol}}</td>
                                    <td>
                                        <form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
                                            <a class="btn-editar" href="/usuarios/{{$usuario->id}}/edit">Editar</a>
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
        $('#usuarios').DataTable({
            "lengthMenu":[[5,10,20,-1],[5,10,20,"All"]]
        });
    });
    </script>
@endsection
