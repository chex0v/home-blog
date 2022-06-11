@if ($records->isNotEmpty())
    <div class="top">
        <h2 class="post_title">{{ $title }}</h2>
        <div class="top__count">Всего: {{ $records->count() }}</div>
        <div class="top__lists">
            <ul class="top__items">
                @foreach ($records as $record)
                    <li class="top__item">
                        <a href="{{ $record->link }}" class="top__link">
                            {{ $record->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="top__all">
                <a href="{{ $linkAll }}" class="top__link">Все</a>
            </div>
        </div>
    </div>
@endif
