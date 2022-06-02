<nav class="navbar">
    <div class="container">
        <nav class="nav-menu__header">
            <div class="nav-wrapper">
                <a
                    href="{{ route('home') }}"
                    class="brand-logo"
                >chexov</a>
                <a
                    href="javascript:void(0);"
                    data-target="mobile"
                    class="sidenav-trigger"
                >
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    @foreach ($menu as $label => $link)
                        @php
                            $firstPath = collect(explode('/', $link))
                                ->filter()
                                ->first();
                            $isActive = request()->is($firstPath) || request()->is("$firstPath/*");
                        @endphp
                        <li @if ($isActive) class="active" @endif>
                            <a
                                class="nav-menu__header__link"
                                href="{{ $link }}"
                            >{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <ul
            class="sidenav"
            id="mobile"
        >
            <li>
                <h3 class="header-nav-menu">Меню</h3>
            </li>
            <hr />
            <li><a href="{{ route('home') }}">Главная</a></li>
            @foreach ($menu as $label => $link)
                @php
                    $firstPath = collect(explode('/', $link))
                        ->filter()
                        ->first();
                    $isActive = request()->is($firstPath) || request()->is("$firstPath/*");
                @endphp
                <li @if ($isActive) class="active" @endif>
                    <a href="{{ $link }}">{{ $label }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>
