@extends('layouts.main')

@section('Title')
    Instant Replay
@endsection

@section('Style')
    <link rel="stylesheet" href="style/param.css">
@endsection

@section('Content')

    <form method="post" action="/postVideo" enctype="multipart/form-data">
        @csrf
        <label for="name" >{{ __('Nom de la vidéo') }}</label>

        <div class="">
            <input id="name" type="text" value="{{ old('name') }}" name="name"required>
        </div>

        <label for="jeu" >{{ __('Jeu') }}</label>

        <div class="">
            <select id="jeu" value="{{ old('jeu') }}" name="jeu"required>
                <option value="1">Fortnite</option>
                <option value="2">Apex Legends</option>
                <option value="3">Overwatch</option>
                <option value="4">Valorant</option>
            </select>
        </div>

        <label for="video" >{{ __('Importer votre vidéo (Taille max : 8Mo') }}</label>

        <div class="">
            <input id="video" accept="video/*" type="file" name="video" required>
        </div>


        <input id="idUser" type="hidden" value="{{ Auth::user()->id }}" name="idUser"required>

        <button type="submit" class=""> {{ __('Ajouter la vidéo') }}</button>
    </form>
@endsection
