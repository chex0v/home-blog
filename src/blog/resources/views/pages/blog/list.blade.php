@extends('layouts.app')
@section('header-css')
    @parent
@endsection
@section('title', 'Блог')

@section('content')
    <x-breadcrumbs :paths="collect([route('blog.list') => 'Блог'])"></x-breadcrumbs>
    @foreach ($posts as $post)
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">{{ $post->title }}</span>
                        <div class="post__body">
                            {{ $post->annotation }}
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('blog.detail', $post->slug) }}">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
@endsection
