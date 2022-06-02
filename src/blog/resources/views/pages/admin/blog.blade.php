@extends('layouts.admin')
@section('content')
    <div class="blog">
        <div class="container">
            <div class="blog__wrapper">
                <ul class="blog__list">
                    @foreach ($articles as $article)
                        <li class="blog__item">
                            <div class="blog__card_list">
                                <div class="blog__title">
                                    {{ $article->title }}
                                </div>
                                <div class="blog__preview_text">
                                    {{ $article->annotation }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
