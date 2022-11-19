@extends('layouts.table-style')


@section('contenido')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Donativos') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 3%">
                    <a href="donativos/create" class="btn-create">CREAR</a>

                    <table id="donativos" style="width: 100%">
                        <thead style="background-color: #d3d4df;">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Ong</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Creacion</th>
                                <th scope="col">Actualizacion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #ebebef;">
                            @foreach ($donativos as $donativo)
                                <tr>
                                    <td>{{$donativo->id}}</td>
                                    <td>{{$donativo->usuario->id}}</td>
                                    <td>{{$donativo->ong->nombreOng}}</td>
                                    <td>{{$donativo->cantidadDon}}</td>
                                    <td>{{$donativo->descripcionDon}}</td>
                                    <td>{{$donativo->created_at}}</td>
                                    <td>{{$donativo->updated_at}}</td>
                                    <td>
                                        <form action="{{route('donativos.destroy',$donativo->id)}}" method="POST">
                                            <a class="btn-editar" href="/donativos/{{$donativo->id}}/edit">Editar</a>
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
        $('#donativos').DataTable({
            "lengthMenu":[[5,10,20,-1],[5,10,20,"All"]]
        });
    });
    </script>
@endsection



