@extends('layouts.head');

@section('contenido')
    <div class="container-fluid">
        <h1>{{$ong->id}}</h1>
        <h1>{{$ong->nombreOng}}</h1>
        <h1>{{$ong->descripcionOng}}</h1>
        
        <a href="./{{$ong->id}}/donar" class="btn btn-primary">Donar</a>
    </div>


@endsection
