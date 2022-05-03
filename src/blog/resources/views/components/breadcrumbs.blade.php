@if ($paths->isNotEmpty())
    <nav class="breadcrumb_item">
        <div class="nav-wrapper">
            <div class="col s12">
                <a href="{{ route('home') }}" class="breadcrumb">Главная</a>
                @foreach ($paths as $url => $name)
                    <a href="{{ $url }}" class="breadcrumb">{{ $name }}</a>
                @endforeach
            </div>
        </div>
    </nav>
@endif
