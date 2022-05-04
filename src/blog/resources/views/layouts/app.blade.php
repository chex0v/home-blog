<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chexov - @yield('title')</title>
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
                <a href="{{ route('home') }}" class="brand-logo navbar__title">Chexov</a>
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
                    <h5 class="black-text">Chexov</h5>
                    <p class="grey-text"></p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text" href="{{ route('blog.list') }}">Блог</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright footer__copyright">
            <div class="container">
                © 2022 chexov
            </div>
        </div>
    </footer>
    @section("footer_js")
    @show
</body>

</html>
