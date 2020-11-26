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
                                        <label class="label">Ubicacion</label>
                                        <div class="form-group">
                                            <input type="text" name="ubicación" id="ubicación" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Contacto</label>
                                        <div class="form-group">
                                            <input type="text" name="contacto" id="contacto" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Cantidad canchas</label>
                                        <div class="form-group">
                                            <input type="text" name="cantidad_canchas" id="cantidad_canchas" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="w-33">
                                        <div class="center">
                                        <input type="submit" class="btn btn-info" value="Registrar">
                                        </div>
                                    </div>

                           <a href="http://araucanchas.test/Recinto" class="btn btn-info">Atras</a>


                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    @endsection
