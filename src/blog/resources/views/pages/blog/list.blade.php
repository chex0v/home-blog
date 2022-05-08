@extends('layouts.app')
@section('header_css')
    @parent
@endsection
@section('title', 'Блог')

@section('content')
    <div class="row">
        <div class="col s12">
            <x-breadcrumbs :paths="collect(['Блог' => null])" />
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <h1>Статьи @if ($posts->currentPage() > 1)
                    - стр. {{ $posts->currentPage() }}
                @endif
            </h1>
            <hr />
        </div>
    </div>
    @forelse ($posts as $post)
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
                        <a class="red-text" href="{{ route('blog.detail', $post->slug) }}">Читать</a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col s12">
                <p class="flow-text">Пока нет статей</p>
            </div>
        </div>
    @endforelse
    <div class="row">
        <div class="col s12">
            <x-pagination :page="$posts->currentPage()" :per-page="$posts->perPage()" :total="$posts->total()" :route="'blog.list'" />
        </div>
    </div>
@endsection
