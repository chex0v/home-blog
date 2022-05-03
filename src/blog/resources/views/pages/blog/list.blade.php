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
                            {{ $post->text }}
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="!#">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
