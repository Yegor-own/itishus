<nav>
    <ul>
        <li>
            <a href="/">{{ __('Itishus') }}</a>
        </li>
        @guest
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}">{{ __('Войти') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                </li>
            @endif
        @else
            <li>
                <a href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                <div class="dropdown">
                    @if (Auth::user()->isadmin)
                        <a href="{{ route('admin') }}">Админка</a>
                    @endif
                    <a href="{{ route('home') }}">Ваши курсы</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Выйти
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>

