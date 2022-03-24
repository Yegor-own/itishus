@extends('layouts.app')


@section('title')
    Создать курс
@endsection

@section('content')
    <div class="container">
        <form action="{{ url('/courses/') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3 col-4">
                <input class="form-control m-2" type="file" name="img">
                <textarea class="form-control m-2" type="text" name="content" cols="30" rows="10" placeholder="Описание"></textarea>
                <button class="btn btn-primary ml-2" type="submit">Создать</button>
            </div>
        </form>
    </div>
@endsection