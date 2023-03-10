<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'UESCH') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					@auth()
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
						<li class="nav-item">
                            <a href="{{ url('/niveles') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Niveles</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/estudiantes') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Estudiantes</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/docentes') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Docentes</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/usuarios_pendientes') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Usuarios_pendientes</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/subtemarios') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Subtemarios</a>
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/temarios') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Temarios</a>
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/actividades') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Actividades</a>
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/cualidades') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Cualidades</a>
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/estados') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Estados</a>
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/niveles') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Niveles</a>
                        </li>
                    </ul>
					@endauth()

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>
    </div>
</body>
</html>
