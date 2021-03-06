@extends('layouts.app')


@section('title')
    Админка
@endsection


@section('content')
    <div class="container content">
        <div class="row">
            <a href="{{ url('/courses/create') }}" class="btn btn-success">Создать</a>
        </div>
        <div class="row">
            @foreach($courses as $course)
                <div href="{{ url('/courses/'.$course->id.'/') }}" class="card col-3" style="padding: 10px; margin: 10px">
                    <img src="../storage/{{ $course->img }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{ $course->content }}</p>
                    </div>
                    <a href="{{ url('/courses/'.$course->id.'/edit') }}" class="btn btn-primary m-2">Редактировать</a>
                    <a href="{{ url('/courses/'.$course->id.'/videos/list') }}" class="btn btn-warning m-2 ">Редактировать содержимое</a>
                    <form action="{{ url('courses/'.$course->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-2" type="submit">Удалить весь курс</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
