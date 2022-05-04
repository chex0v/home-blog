@extends('layouts.app')
@section('header-css')
    @parent
@endsection
@section('title', 'Блог')

@section('content')
    <div class="row">
        <div class="col s12">
            <x-breadcrumbs :paths="collect([route('blog.list') => 'Блог'])"></x-breadcrumbs>
        </div>
    </div>
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
    <div class="row">
        <div class="col s12">
            <x-pagination :page="$posts->currentPage()" :count="$posts->lastPage()" :route="'blog.list'" />
        </div>
    </div>
@endsection
