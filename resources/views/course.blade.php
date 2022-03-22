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
                    <a href="{{ url('/courses/'.$course_id.'/video/'.$video_id->id.'/') }}" class="list-group-item">{{ $video_id->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->video_link }}" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
                <h1>{{ $video->title }}</h1>
                <h3>{{ $video->content }}</h3>
            </div>
        </div>
    </div>
@endsection
