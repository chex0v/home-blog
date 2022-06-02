<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <link
        href="{{ asset('css/admin.css') }}"
        rel="stylesheet"
    >
    <title>Админка</title>
</head>

<body>
    <x-top-menu />
    <main>
        <section class="central">
            <div class="container">
                @yield('content')
            </div>
        </section>

    </main>
    <script src="{{ mix('js/admin.js') }}"></script>
</body>

</html>
