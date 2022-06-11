@extends('layouts.admin')
@section('content')
    <div class="blog">
        <div class="container">
            <div class="blog__wrapper">
                <ul class="blog__list">
                    @foreach ($articles as $article)
                       <x-post-list-preview :post="$article" />
                    @endforeach
                </ul>
                
            </div>
        </div>
    </div>
@endsection
