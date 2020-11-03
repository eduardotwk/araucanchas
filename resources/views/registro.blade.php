@extends('layouts.app')

@section('content')

    <ejemplo-component></ejemplo-component>

@endsection

        <script>
            import Ejemplo from "../js/components/componentes/ejemplo";
            export default {
                components: {Ejemplo}
            }
        </script>