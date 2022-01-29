@extends('layouts.app')


@section('title')
    Добро пожаловать
@endsection

@guest
    @if (Route::has('login') or Route::has('register'))

        @section('requires')
            <link rel="shortcut icon" href="TemplateData/favicon.ico">
            <link rel="stylesheet" href="TemplateData/style.css">
            <script src="TemplateData/UnityProgress.js"></script>
            <script src="Build/UnityLoader.js"></script>
            <script>
                var unityInstance = UnityLoader.instantiate("unityContainer", "Build/ItShoos.json", {onProgress: UnityProgress});
            </script>
        @endsection

        @section('content')
            <div class="webgl-content">
                <div id="unityContainer" style="width: 960px; height: 600px"></div>
                <div class="footer">
                    <div class="webgl-logo"></div>
                    <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
                    <div class="title">itShoos2</div>
                </div>
            </div>
        @endsection

    @endif
@endguest


