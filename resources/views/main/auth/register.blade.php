@extends('main.layouts.app')

@section('title', 'Registrarse')

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
    @section('tbanner', 'Registrarse')
        @include('main.layouts.inner-banner')

        <!-- section -->
        <div class="section login">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="card">
                                <div class="card-header">{{ __('Ingrese sus datos para registrarse') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                                        aria-label="{{ __('Registrarse') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        {{--  --}}
                                        <div class="form-group row">
                                            <label for="apellido"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                            <div class="col-md-6">
                                                <input id="apellido" type="text"
                                                    class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}"
                                                    name="apellido" value="{{ old('apellido') }}" required autofocus>

                                                @if ($errors->has('apellido'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('apellido') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label for="direccion"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                                            <div class="col-md-6">
                                                <input id="direccion" type="text"
                                                    class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}"
                                                    name="direccion" value="{{ old('direccion') }}" required autofocus>

                                                @if ($errors->has('direccion'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('direccion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label for="telefono"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                            <div class="col-md-6">
                                                <input id="telefono" type="text"
                                                    class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                                                    name="telefono" value="{{ old('telefono') }}" required autofocus>

                                                @if ($errors->has('telefono'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <div class="form-group row">
                                            <label for="celular"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                                            <div class="col-md-6">
                                                <input id="celular" type="text"
                                                    class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}"
                                                    name="celular" value="{{ old('celular') }}" required autofocus>

                                                @if ($errors->has('celular'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('celular') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--  --}}
                                        <div class="form-group row">
                                            <!-- <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label> -->
                                            <div class="col-md-6">
                                                <!-- <label class="switch"> -->
                                                <!-- <input type="checkbox" name="estado" required value="1" readonly="readonly" /> -->
                                                <input type="hidden" name="estado" required value="0" readonly="readonly" />
                                                <!-- <div class="switch-btn"></div> -->
                                                <!-- </label> -->
                                            </div>
                                        </div>
                                        <!-- -->
                                        <div class="form-group row">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- -->
                                        <div class="form-group row">
                                            <label for="foto"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                                            <div class="col-md-6">
                                                <input id="foto" type="file" name="foto" value="{{ old('foto') }}"
                                                    required autofocus>

                                                @if ($errors->has('foto'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('foto') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- -->

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
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Registrarse') }}
                                                </button>
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
