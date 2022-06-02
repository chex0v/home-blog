@extends('layouts.app')
@section('title', 'Обо мне')

@section('content')
    <div class="row">
        <div class="col m2">
        </div>
        <div class="col m8 s12">
            <h1>About</h1>
            <hr />
        </div>
        <div class="col m2">
        </div>
    </div>
    <div class="row">
        <div class="col m2">
        </div>
        <div class="col s12 m8">
            <h4>Привет! Я Дмитрий Дмитриенко, full stack developer из г. Волгоград.</h4>
            <p class="flow-text">Ранее занимался разработкой для Битрикс и Битрикс24.</p>

            <p class="flow-text">На данный момент занимаю поддержкой и разработкой приложений на Laravel(фреймворках на
                нём: OctoberCMS,
                WinterCMS) и NestJS.</p>

            <p class="flow-text">Для frontend часто использую Vue.</p>

            <p class="flow-text">Закончил <a
                    target="_blank"
                    href="https://www.vstu.ru/"
                >ВолгГТУ</a> по специальности
                "Программное обеспечение
                автоматизированных систем",
                получил степень магистра.</p>
            <h4>Сертфикаты для повышения квалификации</h4>
            <x-certificate-carousel />
        </div>
        <div class="col m2">
        </div>
    </div>
    <x-main-last-blog-post />
@endsection
