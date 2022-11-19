@extends('layouts.table-style')

@section('contenido')
    
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categorias') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 3%">
                    <a href="categorias/create" class="btn-create">CREAR</a>

                    <table id="categorias" style="width: 100%;">
                        <thead style="background-color: #d3d4df;">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #ebebef;">
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{$categoria->id}}</td>
                                    <td>{{$categoria->nombreCad}}</td>
                                    <td>
                                        <form action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
                                            <a class="btn-editar" href="/categorias/{{$categoria->id}}/edit">Editar</a>
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
        $('#categorias').DataTable({
            "lengthMenu":[[5,10,20,-1],[5,10,20,"All"]]
        });
    });
    </script>
@endsection




