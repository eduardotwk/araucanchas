@extends('layouts.app')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">

                        @endif

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edita tu cancha</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-container">
                                    <form action="{{route('cancha.update', $cancha)}}" method="post" >
                                        @csrf
                                        @method('put')

                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <label class="label">Numero de la cancha</label>
                                                <div class="form-group">
                                                    <input type="text" name="numero_cancha" id="numero_cancha" class="form-control input-sm" value="{{$cancha->numero_cancha}}">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <label class="label">Tarifa</label>
                                                <div class="form-group">
                                                    <input type="text" name="tarifa" id="tarifa" class="form-control input-sm" value="{{$cancha->tarifa}}">
                                                </div>
                                            </div>


                                            <div class="w-33">
                                                <div class="center">
                                                    <input type="submit" class="btn btn-info" value="Guardar">
                                                </div>
                                            </div>


                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
        </section>
    </div>
@endsection
