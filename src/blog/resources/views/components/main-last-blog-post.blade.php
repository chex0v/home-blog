@php
$col = (int) ceil(12 / $count);
@endphp
@if ($posts->isNotEmpty())
    <div class="row">
        @foreach ($posts as $post)
            <div class="col s12 m{{ $col }}">
                <div class="card small">
                    <div class="card-content">
                        <div class="card-title">
                            {{ $post->title }}
                        </div>
                        <p>
                            {{ $post->annotation }}
                        </p>
                    </div>
                    <div class="card-action">
                        <a class="card-action--red" href="{{ route('blog.detail', $post->slug) }}">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col s12 center-align">
            <a class="waves-effect waves-light btn-large red" href="{{ $linkAll }}">Все статьи блога</a>
        </div>
    </div>
@endif
