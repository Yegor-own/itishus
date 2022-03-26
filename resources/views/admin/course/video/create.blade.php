@extends('layouts.app')


@section('title')
    Создать курс
@endsection

@section('content')
    <div class="container">
        <form action="{{ url('courses/'.$course_id.'/videos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3 col-4">
                <input class="form-control m-2" type="text" name="link" placeholder="Ссылка">
                <input class="form-control m-2" type="text" name="title" placeholder="Название">
                <textarea class="form-control m-2" type="text" name="content" cols="30" rows="5" placeholder="Описание"></textarea>
                <button type="submit" class="btn btn-success ml-2">Создать</button>
            </div>
        </form>
    </div>
@endsection