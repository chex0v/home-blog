@extends('layouts.admin')
@section('content')
    <x-admin-top :records="$records" :title="$title" :linkAll="$linkAll"></x-admin-top>

    <div class="top">
        <h2 class="post_title">Последние запросы</h2>
        <div class="top__count">Всего: 10</div>
        <div class="top__lists">
            <ul class="top__items">

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

                <li class="top__item">
                    <a
                        href="#!"
                        class="top__link"
                    >
                        Можно сделать сайт?
                    </a>
                </li>

            </ul>
            <div class="top__all">
                <a
                    href="#!"
                    class="top__link"
                >Все</a>
            </div>
        </div>
    </div>
@endsection
