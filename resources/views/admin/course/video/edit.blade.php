@extends('layouts.app')

@section('title')
    Название
@endsection

@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    @foreach($videos_list as $video_id)
                    <a href="{{ url('/courses/'.$course_id.'/videos/'.$video_id->id.'/edit') }}" class="list-group-item">{{ $video_id->title }}</a>
                    @endforeach
                </div>
                <a href="{{ url('/courses/'.$course_id.'/videos/create') }}" class="btn btn-primary mt-2">Добавить видео</a>
            </div>
            <div class="col-md-4">
                <form action="{{ url('/courses/'.$course_id.'/videos/'.$video->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <input class="form-control m-2" type="text" name="link" value="{{ $video->video_link }}">
                    <input class="form-control m-2" type="text" name="title" value="{{ $video->title }}">
                    <textarea class="form-control m-2" type="text" name="content" cols="30" rows="5">{{ $video->content }}</textarea>
                    <button type="submit" class="btn btn-success ml-2">Обновить</button>
                </form>
            </div>
        </div>
    </div>
@endsection