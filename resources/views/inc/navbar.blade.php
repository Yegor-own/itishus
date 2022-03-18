<nav class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/">{{ __('Itishus') }}</a>
        </li>
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
            </li>
        @endif
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
            </li>
        @endif
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                <div class="dropdown">
                    @if (Auth::user()->isadmin)
                        <a class="nav-link" href="{{ route('admin') }}">Админка</a>
                    @endif
                    <a class="nav-link" href="{{ route('home') }}">Ваши курсы</a>
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Выйти
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @yield('tabs')
        @endguest
        <li class="nav-item">
            <a class="nav-link" href="/courses">{{ __('Курсы') }}</a>
        </li>
    </ul>
</nav>
