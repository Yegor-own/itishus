@extends('layouts.app')

@section('title')
    Название
@endsection

@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    @foreach($videos as $video)
                    <a href="{{ url('/courses/'.$course.'/'.$video->id) }}" class="list-group-item">Видео {{ $video->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                @foreach($videos as $video)
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->video_link }}" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
                <h1>{{ $video->title }}</h1>
                <h3>{{ $video->content }}</h3>
                @endforeach
            </div>
        </div>
    </div>
@endsection
