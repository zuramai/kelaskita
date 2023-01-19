
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('web_config')['WEB_TITLE'] }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @stack('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="@yield('logo', Storage::url('/images/logo/'.config('web_config')['WEB_LOGO']))" alt="Logo" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('student.index') }}">Daftar Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('jadwal.piket') }}">Jadwal Piket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('jadwal.pelajaran') }}">Jadwal Pelajaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.index') }}">Artikel</a>
                            </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('admin.dashboard') }}" role="button" >
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-6">Copyright &copy; {{ date('Y') }} {{config('web_config')['WEB_TITLE']}} </div>
                    <div class="col-6 text-right">Made with <span class="bi bi-heart"></span> by <a href="https://saugi.me">Ahmad Saugi</a></div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
