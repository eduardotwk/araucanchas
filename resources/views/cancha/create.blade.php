@extends('layouts.app')
@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Crea tu cancha</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <form method="POST" action="{{ route('cancha.store') }}"  role="form">
                                {{ csrf_field() }}
                                <div class="row">



                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Numero cancha</label>
                                        <div class="form-group">
                                            <input type="text" name="numero_cancha" id="numero_cancha" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>


                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <label class="label">Tarifa</label>
                                        <div class="form-group">
                                            <input type="text" name="tarifa" id="tarifa" class="form-control input-sm" placeholder="" required>
                                        </div>
                                    </div>


                                    <div class="col-xs-8 col-sm-8 col-md-">
                                        <input type="submit"  value="Guardar" class="btn btn-success btn-block">

                                        <a href="{{ route('cancha.index') }}" class="btn btn-info btn-block" >Atrás</a>


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
