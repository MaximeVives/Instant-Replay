@extends('layouts.main')

@section('Title')
    Instant Replay - {{ ucfirst($namePage)}}
@endsection

@section('Style')
    <link rel="stylesheet" href="style/video.css">
@endsection

@section('Content')
    @foreach($dataVideo as $video)
        <div class="video-container">
            <video class="volume" onloadstart="this.volume=0.1" controls preload="none" poster="image/{{ $namePage }}/{{ $video->image }}">
                <source src="storage/video/{{ $namePage }}/{{ $video->name }}" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
        </div>

{{--        <ul>--}}
{{--            <li>{{ $video->name }}</li>--}}
{{--            <li>{{ $video->poster}}</li>--}}
{{--            <li>{{ $video->nameG}}</li>--}}
{{--            <li>{{ $video->image}}</li>--}}
{{--        </ul>--}}
    @endforeach
@endsection


