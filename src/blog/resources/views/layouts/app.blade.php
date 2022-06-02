<html>

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        name="description"
        content="Дмитрий Дмитриенко. Разработка приложений на Laravel, Vue, NestJS."
    >
    <link
        rel="icon"
        type="image/x-icon"
        href="/favicon.ico"
    >
    <title>chexov - @yield('title')</title>
    @section('header_css')
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
        >
        <link
            href="{{ mix('/css/materialize.css') }}"
            rel="stylesheet"
        >
        <link
            href="{{ mix('/css/main.css') }}"
            rel="stylesheet"
        >
    @show
    @section('header_js')
        <script src="{{ mix('js/materialize.js') }}"></script>
        <script src="{{ mix('js/main.js') }}"></script>
    @show
</head>

<body>
    <x-nav-bar />
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
                <div class="center-align">
                    <div class="col s12">
                        <div class="social">
                            <a
                                target="_blank"
                                href="https://github.com/chex0v"
                                class="waves-effect waves-teal btn-flat social-icon"
                            >
                                <svg
                                    fill="currentColor"
                                    role="img"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>GitHub</title>
                                    <path
                                        fill="currentColor"
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                                    />
                                </svg>
                            </a>
                            <a
                                target="_blank"
                                href="https://vk.com/chexov"
                                class="waves-effect waves-teal btn-flat social-icon"
                            >
                                <svg
                                    fill="currentColor"
                                    role="img"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <title>VK</title>
                                    <path
                                        fill="currentColor"
                                        d="m9.489.004.729-.003h3.564l.73.003.914.01.433.007.418.011.403.014.388.016.374.021.36.025.345.03.333.033c1.74.196 2.933.616 3.833 1.516.9.9 1.32 2.092 1.516 3.833l.034.333.029.346.025.36.02.373.025.588.012.41.013.644.009.915.004.98-.001 3.313-.003.73-.01.914-.007.433-.011.418-.014.403-.016.388-.021.374-.025.36-.03.345-.033.333c-.196 1.74-.616 2.933-1.516 3.833-.9.9-2.092 1.32-3.833 1.516l-.333.034-.346.029-.36.025-.373.02-.588.025-.41.012-.644.013-.915.009-.98.004-3.313-.001-.73-.003-.914-.01-.433-.007-.418-.011-.403-.014-.388-.016-.374-.021-.36-.025-.345-.03-.333-.033c-1.74-.196-2.933-.616-3.833-1.516-.9-.9-1.32-2.092-1.516-3.833l-.034-.333-.029-.346-.025-.36-.02-.373-.025-.588-.012-.41-.013-.644-.009-.915-.004-.98.001-3.313.003-.73.01-.914.007-.433.011-.418.014-.403.016-.388.021-.374.025-.36.03-.345.033-.333c.196-1.74.616-2.933 1.516-3.833.9-.9 2.092-1.32 3.833-1.516l.333-.034.346-.029.36-.025.373-.02.588-.025.41-.012.644-.013.915-.009ZM6.79 7.3H4.05c.13 6.24 3.25 9.99 8.72 9.99h.31v-3.57c2.01.2 3.53 1.67 4.14 3.57h2.84c-.78-2.84-2.83-4.41-4.11-5.01 1.28-.74 3.08-2.54 3.51-4.98h-2.58c-.56 1.98-2.22 3.78-3.8 3.95V7.3H10.5v6.92c-1.6-.4-3.62-2.34-3.71-6.92Z"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                    Copyright&nbsp;©&nbsp;{{ now()->year }}&nbsp;chexov
                </div>
            </div>
        </div>
    </footer>
    @section('footer_js')
    @show
</body>

</html>
