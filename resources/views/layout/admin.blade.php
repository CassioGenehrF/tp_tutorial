<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" sizes="32x32">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            theme = {!! json_encode(\Session::get('theme')) !!}
            $(':root').addClass(theme);
        });
    </script>
    @yield('scripts')
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="{{ route('admin') }}" class="nav_logo">
                    <i class='bx nav_logo-icon'>
                        <img src="{{ asset('img/logo.png') }}" alt="Temporada Paulista" width="20" height="20">
                    </i>
                    <span class="nav_logo-name">Temporada Paulista</span>
                </a>
                <div class="nav_list">
                    <a href="{{ route('admin') }}" class="nav_link" id="add_tutorial">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Adicionar Tutorial</span>
                    </a>
                    <a href="{{ route('admin') }}" class="nav_link" id="tutorials">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Tutoriais</span>
                    </a>
                </div>
            </div>
            <a class="theme" id="dark">
                <i class='bx bx-moon nav_icon'></i>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn">Sair</button>
                </form>
            </a>
        </nav>
    </div>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
