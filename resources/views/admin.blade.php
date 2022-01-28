@extends('layouts.app')


@section('title')
    Админка
@endsection

@section('tabs')
    <li>
        <div class="dropdown">
            <a>
                Создать
            </a>
            <div class="dropdown">
                <a href="{{ route('home') }}">
                    Событие
                </a>
                <a href="{{ route('home') }}">
                    Курс
                </a>
            </div>
        </div>
    </li>
@endsection


@section('content')
    Администрация
@endsection
