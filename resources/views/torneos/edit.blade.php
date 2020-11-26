@extends('layouts.app')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Crea tu recinto</h3>
                    </div>

                    <div class="panel-body">
                        <div class="table-container">
                            <form action="{{ route('recinto.store') }}" method="post" >
                                {{ csrf_field() }}
                                <div class="row">



                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Nombre del recinto</label>
                                        <div class="form-group">
                                            <input type="text" name="nombre_recinto" id="nombre_recinto" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>


                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Nombre torneo</label>
                                        <div class="form-group">
                                            <input type="text" name="nombre_torneo" id="ubicación" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Cantidad equipo</label>
                                        <div class="form-group">
                                            <input type="text" name="cantidad_equipo" id="cantidad_equipo" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Info torneo</label>
                                        <div class="form-group">
                                            <input type="text" name="info_torneo" id="info_torneo" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="center">
                                            <input type="submit" class="btn btn-info" value="Registrar Torneo">
                                        </div>
                                    </div>

                                    <a href="http://araucanchas.test/torneo" class="btn btn-info">Atras</a>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
