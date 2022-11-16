@extends('layouts.head');

@section('contenido')
    <div class="container-fluid">
        @foreach ($ongs as $ong)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$ong->nombreOng}}</h5>
                <p class="card-text">{{$ong->descripcionOng}}</p>
                <a href="/list/{{$ong->id}}" class="btn btn-primary">Descripcion</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection