@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Reservar Cancha</h3>
        </div>

        <div class="select">
            <select>
                <option>Seleccionar fecha</option>
                <option>03-11-2020</option>
            </select>
        </div>

        <div class="select">
            <select>
                <option>Hora inicio</option>
                <option>18:00</option>
            </select>
        </div>

        <div class="select">
            <select>
                <option>Hora fin</option>
                <option>19:00</option>
            </select>
        </div>





<div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Reservar</button>
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