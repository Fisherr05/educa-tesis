<!-- Start header -->

<header class="top-header">
    <nav class="navbar header-nav navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('main/images/logo.png') }}" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                {{-- <span></span>
                <span></span>
                <span></span> --}}
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{ url('/') }}">Principal</a></li>
                    <li><a class="nav-link" href="{{ url('/info') }}">Informacion</a></li>
                    <li><a class="nav-link" href="{{ url('/unidadeducativa') }}">Unidad Educativa</a></li>
                    <li><a class="nav-link" href="{{ url('/cursos') }}">Cursos</a></li>

                    @if (Route::has('login'))
                        @auth
                            <li><a class="nav-link" href="{{ route('dashboard') }}">UESCH</a></li>
                        @else
                            <li><a class="nav-link" href="{{ url('/login') }}">Iniciar Sesión</a></li>
                            <li><a class="nav-link" href="{{ url('/register') }}">Registrarse</a></li>
                            {{-- <li><a class="nav-link" href="{{ url('/loginEstudiante') }}">Iniciar Sesión</a></li> --}}
                        @endauth
                    @endif

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->
