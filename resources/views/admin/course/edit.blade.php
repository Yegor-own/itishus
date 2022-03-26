@extends('layouts.app')


@section('title')
    Редактировать курсы
@endsection

@section('content')
    <div class="container">
        <form action="{{ url('/courses/'.$course->id.'/') }}" method="POST" enctype ="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 col-4">
                <input class="form-control m-2" type="file" name="img">
                <textarea class="form-control m-2" type="text" name="content" cols="30" rows="5">{{ $course->content }}</textarea>
                <button class="btn btn-primary ml-2" type="submit">Обновить</button>
            </div>
        </form>
    </div>
@endsection

