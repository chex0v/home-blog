@extends('layouts.admin')
@section('content')
    <x-admin-top :records="$records" title="Последние статьи блога" :linkAll="route('admin.blog.index')" />
    <x-admin-top :records="$feedback" title="Последние обращения" linkAll="!#" />
@endsection
