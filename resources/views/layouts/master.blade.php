<!doctype html>
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Doutor Agenda')</title>
    @push('style')
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link rel="stylesheet" href="vendor/bootstrap-4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/fontawesome-5.2.0/css/all.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="vendor/js/modernizr.js"></script>
    @endpush
    @stack('style')
</head>
<body>
<header class="cd-main-header">
    <a href="/" class="cd-logo"><img src="img/logo-padrao.png" alt="Doutor Agenda"></a>

    {{--<div class="cd-search is-hidden">
        <form action="#0">
            <input type="search" placeholder="Pesquisar...">
        </form>
    </div>--}}

    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>

    <nav class="cd-nav">
        <ul class="cd-top-nav">
            <li><a href="#0">Personalizar</a></li>
            <li><a href="#0"><i class="fas fa-plus-circle"></i></a></li>
            <li><a href="#0"><i class="fas fa-expand-arrows-alt" onclick="toggleFullScreen()"></i></a></li>
            <li><a href="#0"><i class="far fa-bell"></i></a></li>
            <li class="has-children account">
                <a href="#0">
                    <img src="img/cd-avatar.png" alt="avatar">
                    Perfil
                </a>

                <ul>

                    <li><a href="#0">Minha Conta</a></li>
                    <li><a href="#0">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header> <!-- .cd-main-header -->

<main class="cd-main-content">
    <nav class="cd-side-nav">
        <ul>
            {{--<li class="cd-label">Main</li>--}}
            <li class="has-children mn-inicio">
                <a id="menu-inicio" class="" href="/">Início</a>

                <ul>
                    <li><a href="#0">Menu 1</a></li>
                    <li><a href="#0">Menu 2</a></li>
                    <li><a href="#0">Menu 3</a></li>
                </ul>
            </li>
            <li class="has-children mn-agenda">
                <a id="menu-agenda" href="/agenda">Agenda</a>

                <ul>
                    <li><a href="#0">Menu 1</a></li>
                    <li><a href="#0">Menu 2</a></li>
                    <li><a href="#0">Menu 3</a></li>
                </ul>
            </li>

            <li class="has-children mn-clinica">
                <a id="menu-clinica" href="/clinica">Perfil da Clínica</a>

                <ul>
                    <li><a href="#0">Menu 1</a></li>
                    <li><a href="#0">Menu 2</a></li>
                    <li><a href="#0">Menu 3</a></li>
                </ul>
            </li>

            <li class="has-children mn-relatorios">
                <a id="menu-relatorios" href="/relatorios">Relatórios</a>

                <ul>
                    <li><a href="#0">Menu 1</a></li>
                    <li><a href="#0">Menu 2</a></li>
                    <li><a href="#0">Menu 3</a></li>
                </ul>
            </li>
            <li class="has-children mn-configuracoes">
                <a id="menu-configuracoes" href="/configuracoes">Configurações</a>

                <ul>
                    <li><a href="#0">Menu 1</a></li>
                    <li><a href="#0">Menu 2</a></li>
                    <li><a href="#0">Menu 3</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    @yield('content')
</main> <!-- .cd-main-content -->


@push('scripts')
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->
    <script>
        var laravel_token = '{{ csrf_token() }}';
        var resizefunc = [];

        function toggleFullScreen() {
            if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                    document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
            }
        }
    </script>
@endpush
@stack('scripts')
</body>
</html>
