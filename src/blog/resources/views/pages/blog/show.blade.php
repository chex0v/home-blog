@extends('layouts.app')
@section('header_css')
    @parent
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@endsection
@section('title', 'Блог')

@section('content')
    <x-breadcrumbs :paths="collect(['Блог' => route('blog.list'), $post->title => null])"></x-breadcrumbs>
    <div class="row">
        <div class="col s2"></div>
        <div class="col s8">
            <h1>{{ $post->title }}</h1>
        </div>
        <div class="col s2"></div>
    </div>
    <div class="row">
        <div class="col m1 l2"></div>
        <div class="col s12 m10 l8 flow-text">
            @markdown
            {{ $post->text }}
            @endmarkdown
        </div>
        <div class="col m1 l2"></div>
    </div>
@endsection
@section('footer_js')
    <script src="{{ mix('js/highlight.js') }}" defer></script>
@endsection
