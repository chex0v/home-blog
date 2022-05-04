    <nav class="breadcrumb_item">
        <div class="nav-wrapper">
            <a href="{{ route('home') }}" class="breadcrumb">Главная</a>
            @foreach ($paths as $name => $url)
                @if ($url)
                    <a href="{{ $url }}" class="breadcrumb">{{ $name }}</a>
                @else
                    <span class="breadcrumb">{{ $name }}</span>
                @endif
            @endforeach
        </div>
    </nav>
