@extends('layout.app')

@section('scripts')
    <title>Login - Temporada Paulista</title>
@endsection

@section('content')
    <div class="flex">
        <div class="form-box text-center">
            <div class="form-logo text-center">
                <img src="{{ asset('img/logopaulista.png') }}" alt="Temporada Paulista">
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
                <div class="input-box flex direction-column">
                    <label for="user_login">Usuário:</label>
                    <input type="text" id="user_login" name="user_login" placeholder="Digite seu nome de usuário"
                        required>
                </div>
                <div class="input-box flex direction-column">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="login-button">Entrar</button>
            </form>
        </div>
    </div>
@endsection
