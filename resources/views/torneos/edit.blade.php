@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Torneos</h3>
        </div>

        <div class="form-group row">
            <label for="nombre_torneo" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Torneo') }}</label>
            <div class="col-md-6">
                <input id="nombre_torneo" type="nombre_torneo" class="form-control @error('nombre_torneo') is-invalid @enderror" name="nombre_torneo" value="{{ old('Nombre Torneo') }}" required autocomplete="Nombre Torneo">

                @error('nombre_torneo')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
        </div>

        <div class="select">
            <select>
                <option>Cantidad de equipo</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>

            </select>
        </div>

        <div class="select">
            <select>
                <option>Info torneo</option>

            </select>
        </div>
        <br><br/>
        <br><br/>






        <div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Ingresar torneo</button>
                </div>
                <div class="control">
                    <button class="button is-link">Cancelar</button>
                </div>
            </div>
        </div>
        @endsection

        <script>
            import Ejemplo from "../js/components/componentes/ejemplo";
            export default {
                components: {Ejemplo}
            }
        </script>
    </div>
