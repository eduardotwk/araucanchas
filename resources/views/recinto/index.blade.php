@extends('layouts.app')
@section('content')
    <html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <h2>Registra tu recinto</h2>
        <div class="btn-group">
            <a href="http://araucanchas.test/Recinto/Create" class="btn btn-info">Registrar</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Contacto</th>
                <th>Cantidad de canchas</th>
                <th>Accion</th>
            </tr>
            </thead>
            @foreach($recintos as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->nombre_recinto}}</td>
                    <td>{{$value->ubicación}}</td>
                    <td>{{$value->contacto}}</td>
                    <td>{{$value->cantidad_canchas}}</td>
                    <td>
                        <a href="{{route('recinto.edit', $value)}}" class="btn btn-info">Editar</a>
                    </td>
                </tr>
                <td>
                    <form action="{{route('recinto.destroy', $value)}}" method="post" >
                        @csrf
                       @method('delete')
                        <div class="w-33">
                            <div class="center">
                                <input type="submit" class="btn btn-info" value="Eliminar">
                                <a href="http://araucanchas.test/Recinto/Cancha" class="btn btn-info">Crear cancha</a>
                            </div>
                        </div>
                    </form>
                </td>
            @endforeach
@endsection
