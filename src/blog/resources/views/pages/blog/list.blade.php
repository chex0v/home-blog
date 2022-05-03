@extends('layouts.app')
@section('header-css')
    @parent
@endsection
@section('title', 'Блог')

@section('content')
    <x-breadcrumbs :paths="collect([route('blog.list') => 'Блог'])"></x-breadcrumbs>
    Список страниц блога
@endsection
