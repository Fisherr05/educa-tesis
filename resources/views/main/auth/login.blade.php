@extends('main.layouts.app')

@section('title', 'Iniciar Sesion')

@section('content')

    <body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

        <!-- LOADER -->
        <div id="preloader">
            <div class="loader">
                <img src="{{ asset('main/images/loader.gif') }}" alt="Preloader Image" />
            </div>
        </div>
        <!-- END LOADER -->

        @include('main.layouts.header')
    @section('tbanner', 'Iniciar Sesión')
        @include('main.layouts.inner-banner')

        <!-- section -->
        <div class="section login">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="card">
                                <div class="card-header">{{ __('Ingrese sus credenciales para iniciar sesión') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}"
                                        aria-label="{{ __('Iniciar Sesión') }}">
                                        @csrf

                                        {{--  --}}
                                        {{-- <div class="form-group row"> --}}
                                        <center><img src="{{ asset('/main/images/login.png') }}"
                                                style="width: 200px; height: 200px" /></center>
                                        {{-- </div> --}}
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label for="email"
                                                class="col-sm-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                    name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordarme') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Iniciar Sesión') }}
                                                </button>

                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('¿Olvidaste tu contraseña?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->


        @include('main.layouts.footer')
        @include('main.layouts.imports-scripts')

    </body>


@stop
