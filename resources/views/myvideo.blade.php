@extends('layouts.main')

@section('Title')
    Instant Replay
@endsection

@section('Style')
    <link rel="stylesheet" href="style/param.css">
@endsection

@section('Content')
    <div class="spacer">
    @foreach($data_video as $video)
        <div class="video-container">
            <video class="volume" onloadstart="this.volume=0.1" preload="none" poster="image/{{ $video->nameG }}/{{ $video->image }}">
                <source src="storage/video/{{ $video->nameG }}/{{ $video->name }}" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <form action="/deleteVideo">
                <input type="hidden" value="{{ $video->ID_video }}" name="ID_video">
                <button type="submit" class="delete"><img onclick="" src="image/suppr.png" alt=""></button>
            </form>
        </div>
    @endforeach
    </div>
@endsection
