@extends('layouts.app')
@section('header_css')
    @parent
@endsection
@section('title', 'Главная')

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="center-image">
                <img
                    class="center-image__img"
                    src="/img/dmitrienko.png"
                />
                <div class="center-image__text center-align">
                    <h1>Дмитрий Дмитриенко</h1>
                    <p class="flow-text grey-text text-darken-1">Разработка приложений на Laravel, Vue, NestJS, WinterCMS,
                        OctoberCMS</p>
                </div>
            </div>
        </div>
    </div>
    <x-main-last-blog-post />
    <x-feedback-form />
@endsection
