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
    <title>Login - Temporada Paulista</title>
</head>

<body id="body-pd">
    <div class="flex">
        <div class="form-box text-center">
            <div class="form-logo text-center">
                <img style="width: 500px;" src="{{ asset('img/logopaulista.png') }}" alt="Temporada Paulista">
            </div>
            <div class="title">
                <h2>Login</h2>
            </div>
            @if ($errors->any())
                <ul class="list-group mt-4 w-75 mx-auto">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form class="flex direction-column" action="{{ route('login.auth') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="user_login">Usuário:</label>
                    <input class="form-control" type="text" id="user_login" name="user_login" placeholder="Digite seu nome de usuário"
                        required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="login-button">Entrar</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
