<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Дмитрий Дмитриенко. Разработка приложений на Laravel, Vue, NestJS.">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>chexov - @yield('title')</title>
    @section('header_css')
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/materialize.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    @show
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper navbar__wrapper">
                <a href="{{ route('home') }}" class="brand-logo navbar__title">chexov</a>
                <ul class="right hide-on-med-and-down navbar__link">
                    <li class="navbar__item">
                        <a class="navbar__link" href="{{ route('blog.list') }}">Блог</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="page-footer footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">

                </div>
                <div class="col l4 offset-l2 s12">

                </div>
            </div>
        </div>
        <div class="footer-copyright footer__copyright">
            <div class="container">
                <div class="center-align">Copyright&nbsp;©&nbsp;{{ now()->year }}&nbsp;chexov</div>
            </div>
        </div>
    </footer>
    @section('footer_js')
    @show
</body>

</html>
