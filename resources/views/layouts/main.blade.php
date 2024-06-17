<script>
    // Espera até que o documento seja carregado
    document.addEventListener('DOMContentLoaded', function() {
        // Define o tempo de espera em milissegundos (por exemplo, 5 segundos)
        var timeout = 5000; // 5 segundos

        // Seleciona as mensagens de flash
        var flashMessages = document.querySelectorAll('.msg, .error');

        // Verifica se alguma mensagem de flash está presente
        if (flashMessages.length > 0) {
            // Loop sobre cada mensagem de flash
            flashMessages.forEach(function(flashMessage) {
                // Adiciona a classe de fade-out após o tempo especificado
                setTimeout(function() {
                    flashMessage.classList.add('fade-out');
                }, timeout);
            });
        }
    });
</script>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS DA APLICAÇÃO -->
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/solicitacoes" class="navbar-brand">
                    <img src="/img/logonovacap.png" alt="NovaCap"
                        style="filter: invert(100%) brightness(180%) saturate(20%);">
                </a>
                <ul class="navbar-nav" id="navbar-main">
                    @guest
                        <li class="nav-item">
                            <a href="/solicitantes" class="nav-link">Solicitantes</a>
                        <li class="nav-item">
                            <a href="/materiais" class="nav-link">Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a href="/motoristas" class="nav-link">Motoristas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/automoveis" class="nav-link">Automóveis</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a href="/solicitantes" class="nav-link">Solicitantes</a>
                        <li class="nav-item">
                            <a href="/materiais" class="nav-link">Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a href="/motoristas" class="nav-link">Motoristas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/automoveis" class="nav-link">Automóveis</a>
                        </li>
                        <li class="nav-item">
                            <a href="/user" class="btn btn-info edit-btn text-white">Usuário</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @elseif (session('error'))
                    <p class="error">{{ session('error') }}</p>
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
