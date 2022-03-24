@extends('layouts.app')

@section('title')
    Все курсы
@endsection

@section('content')
    <div class="container content">
        <div class="row">
            @foreach($courses as $course)
                <a href="{{ url('/courses/'.$course->id.'/videos/') }}" class="card col-3" style="width: 18rem;">
                    <img src="/storage/{{ $course->img }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{ $course->content }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
