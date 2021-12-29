<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">

</head>
<body class="bg-light">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand border-b2wAme border-right-0 border-left-0 pr-2 pl-2 text-uppercase" style="border: solid; border-width: 5px;!important;" href="{{ url('/') }}">
                    {{ config('app.name', 'Intranet') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                </li>
                            @endif--}}
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
        @guest
        @else
            @inject('constants', 'App\Config\Constants')
        <header>
            <div class="px-3 py-2 bg-b2wAme text-white">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">

                        <ul class="nav col-12 col-lg-auto justify-content-center my-md-0 text-small">
                            <li>
                                <a href="{{ route('home') }}" class="nav-link text-white">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                    {{--{{$constants::UserType_Admin}}--}}
                                </a>
                            </li>
                            @if ( AUTH::user()->idTipoUsuario === 1)
                                <li>
                                    <a href="{{ route('business.index') }}" class="nav-link text-white">
                                        <i class="fa fa-building"></i>
                                        Empresas
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="#" class="nav-link text-white">
                                    <i class="fas fa-id-card-alt"></i>
                                    Empregados
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        @endguest

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
