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
        <div class="btn-group">
            <a href="http://araucanchas.test/Recinto/Cancha/Create" class="btn btn-info">Registrar</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Numero de cancha</th>
                <th>Valor</th>
                <th>id recinto</th>
                <th>Accion</th>
            </tr>
            </thead>
            @foreach($canchas as $cancha)
                <tr>
                    <td>{{$cancha->id}}</td>
                    <td>{{$cancha->numero_cancha}}</td>
                    <td>{{$cancha->tarifa}}</td>
                    <td>{{$cancha->recinto_id}}</td>
                    <td>
                        <a href="{{route('cancha.edit', $cancha)}}" class="btn btn-info">Editar</a>
                 </td>
                    <td>
                        <a href="http://araucanchas.test/Recinto/Cancha/Reserva/Create" class="btn btn-info">Reservar cancha</a>
                    </td>


                </tr>

                <td>
                    <form action="{{route('cancha.destroy', $cancha)}}" method="post" >
                        @csrf
                        @method('delete')
                        <div class="w-33">
                            <div class="center">
                                <input type="submit" class="btn btn-info" value="Eliminar">
                            </div>
                        </div>
                    </form>
                </td>
    @endforeach
@endsection
