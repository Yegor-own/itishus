<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
<div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
        Itishus
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
        @guest
        <ul class="navbar-nav mr-auto">
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
                        <form class="form-inline my-0 my-md-0">
                            <input class="form-control" type="search" placeholder="Поиск" aria-label="Search">
{{--                            <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Поиск</button>--}}
                        </form>
        </ul>
        <div class="dropdown">
            <div class="btn-group">
                <a type="button" class="btn btn-secondary" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                <a type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split d-flex align-items-center" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                    <span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->isadmin)
                        <a class="dropdown-item" href="{{ route('admin') }}">
                            Админка
                        </a>
                    @endif
                    <a class="dropdown-item" href="{{ route('home') }}">
                        Ваши курсы
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        Выйти
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        @endguest
    </div>
</div>
</nav>
