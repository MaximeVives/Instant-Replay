@extends('layouts.main')

@section('Title')
    Instant Replay
@endsection

@section('Style')
    <link rel="stylesheet" href="style/accueil.css">
@endsection

@section('Content')
    <div class="accueil">
        <div class="guidelines">
            <img src="image/Logowoarrow.png" alt="Full Logo">
            <p>Site N°1 de Replay <span class="accent"></span></p>
        </div>
        <div class="card-all">
            <div class="card-container" id="Fortnite"></div>
            <div class="card-container" id="Apex Legends"></div>
            <div class="card-container" id="Overwatch"></div>
            <div class="card-container" id="Valorant"></div>
        </div>
    </div>

    <script language="JavaScript">
        // function atr(x) {
        //     let name = x.innerText || x.textContent;
        //     let cadreJeu = document.getElementById(name);
        //     cadreJeu.style.transition = "0.3s";
        //     cadreJeu.style.transform = "scale(1.1)";
        // }
        //
        // function atrEnd(x) {
        //     let name = x.innerText || x.textContent;
        //     let cadreJeu = document.getElementById(name);
        //     cadreJeu.style.transform = "scale(1)";
        // }
    </script>
@endsection


