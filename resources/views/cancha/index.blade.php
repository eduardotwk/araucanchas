@extends('layouts.app')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Lista Libros</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="{{ route('cancha.create') }}" class="btn btn-info" >Añadir Libro</a>

                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Id</th>
                                <th>Numero</th>
                                <th>tarifa</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                </thead>
                                <tbody>
                                @if($canchas->count())
                                    @foreach($canchas as $cancha)
                                        <tr>
                                            <td>{{$cancha->id}}</td>
                                            <td>{{$cancha->numero_cancha}}</td>
                                            <td>{{$cancha->tarifa}}</td>
                                           <td><a class="btn btn-primary btn-xs" href="{{action('CanchaController@edit', $cancha->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>

                                            <td>
                                                <form action="{{action('CanchaController@destroy', $cancha->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                    {{ $canchas->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
