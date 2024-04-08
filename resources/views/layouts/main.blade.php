<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS DA APLICAÇÃO -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>

    <body>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logonovacap.png" alt="NovaCap">
                    </a>
                    <ul class="navbar-nav" id="navbar-main">
                        <li class="nav-item">
                            <a href="/solicitante" class="nav-link">Solicitante</a>
                        <li class="nav-item">
                            <a href="/materiais" class="nav-link">Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a href="/motorista" class="nav-link">Motorista</a>
                        </li>
                        <li class="nav-item">
                            <a href="/automovel" class="nav-link">Automóvel</a>
                        </li>
                        <li class="nav-item">
                            <a href="/user" class="btn btn-info edit-btn text-white">Usuário</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer id="footer">
        <div id="footer_copyright">
            Companhia Urbanizadora da Nova Capital do Brasil - NOVACAP &copy; 2024
        </div>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </footer>
