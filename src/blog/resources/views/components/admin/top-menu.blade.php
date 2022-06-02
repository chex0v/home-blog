<header class="header">
    <div class="container">
        <div class="header__wrapper">
            <div class="header__logo">
                <a
                    class="header__logo_link"
                    href="/admin"
                >Админ панель</a>
            </div>
            <div class="hamburger_menu">
                <input
                    id="toggle"
                    class="hamburger_menu__toggle"
                    type="checkbox"
                ></input>
                <label
                    for="toggle"
                    class="hamburger_menu__arrows"
                >
                    <div class="hamburger_menu__line hamburger_menu__top"></div>
                    <div class="hamburger_menu__line hamburger_menu__center"></div>
                    <div class="hamburger_menu__line hamburger_menu__bottom"></div>
                </label>
            </div>
            @auth
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__list_item">
                            <a
                                href="{{ route('admin.blog.index') }}"
                                class="header__link"
                            >Блог</a>
                        </li>
                        <p>|</p>
                        <li class="header__list_item">
                            <p class="header__link">
                                {{ Auth::user()->name }}
                            </p>
                        </li>
                        <li class="header__list_item">
                            <a
                                href="{{ route('admin.logout') }}"
                                class="header__link"
                            >Выйти</a>
                        </li>
                    </ul>
                </nav>
            @endauth
        </div>
    </div>
</header>
