@extends('layouts.app')

@section('content')
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Login</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Please login to proceed.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="https://placehold.it/128x128">
                        </figure>
                        <form method="POST" action="{{ route('login') }}">
                            <div class="field">
                                <div class="control">
                                    <input id="correo "class="input is-large" type="email" placeholder="Correo" name="correo" value="{{ old('correo') }}" required autocomplete="correo">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input id="contrasena" class="input is-large" type="password" placeholder="Contraseña" >
                                </div>
                            </div>
                            <button class="button is-block is-info is-large is-fullwidth">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="/register">registrarse</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
