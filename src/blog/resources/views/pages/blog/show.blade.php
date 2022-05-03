@extends('layouts.app')
@section('header-css')
    @parent
@endsection
@section('title', 'Блог')

@section('content')
    <x-breadcrumbs :paths="collect([route('blog.list') => 'Блог', route('blog.detail', $post->slug) => $post->title])"></x-breadcrumbs>
    @markdown
    {{ $post->text }}
    @endmarkdown
@endsection
