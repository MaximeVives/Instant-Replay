<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instant Replay est un site français de replay e-sportif. Toutes les meilleures vidéos sont ici.">

    <title>@yield('Title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="image/Logowotitle.png" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('Style') <!-- Style adaptatif selon la page -->
    <!-- Js -->

</head>
<body>
    <nav>
        <div class="logo">
            <img src="image/Logowotitle.png" alt="Logo" onclick="menuLink()">
        </div>
        <div class="link">
            <ul id="myTopnavBis" class="topnavBis">
                <li onmouseover="atr(this)" onmouseout="atrEnd(this)"><a href="/fortnite">Fortnite</a></li>
                <li onmouseover="atr(this)" onmouseout="atrEnd(this)"><a href="/apex">Apex Legends</a></li>
                <li onmouseover="atr(this)" onmouseout="atrEnd(this)"><a href="/overwatch">Overwatch</a></li>
                <li onmouseover="atr(this)" onmouseout="atrEnd(this)"><a href="/valorant">Valorant</a></li>
                <li class="icon"><a href="javascript:void(0);" onclick="responsiveBar()">
                    <i class="fa fa-bars"></i>
                </a></li>
            </ul>
        </div>
    </nav>

    <div class="topnav" id="myTopnav">
        <a href="/fortnite">Fortnite</a>
        <a href="/apex">Apex Legends</a>
        <a href="/overwatch">Overwatch</a>
        <a href="/valorant">Valorant</a>
    </div>
{{--    <header></header>--}}
    <main>
        @yield('Content')
        <aside>
            <?php
                if(Auth::check()){
                    ?>
                <button class="open-button img" onclick="openForm()"><img src="image/icone.png" alt="icone user"></button>
                <div class="form-popup" id="myForm">
                    <div class="form-container">
                        <img src="image/icone.png" alt="icone user">
                        <p>Bonjour {{ Auth::user()->name }}</p>
                        <ul>
                            <li><a href="/param">Paramètres du compte</a></li>
                            <li><a href="/addvideo">Ajouter une vidéo</a></li>
                            <li><a href="/myvideo">Mes vidéos</a></li>
                        </ul>

                        <p><a href="/logout">Se déconnecter</a></p>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                    </div>
                </div>
            <?php
                }

                else{
                    ?>

                    <button class="open-button text" onclick="openForm()">Inscription/Connexion</button>

                    <div class="form-popup" id="myForm">
                        <div class="form-container">
                            <p><a href="/login">Se connecter</a></p>
                            <p>Vous n'avez pas de compte ? <a href="/register">Inscrivez-vous</a></p>

                            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </div>
                    </div>
               <?php
                }
            ?>

        </aside>
    </main>
    <footer>

    </footer>

    <script language="JavaScript">
        function menuLink() {
            window.location.replace("/");
        }

        function responsiveBar() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        function atr(x) {
            let isAccueil = window.location.href.split('/').pop();
            if(isAccueil === ""){
                let name = x.innerText || x.textContent;
                let cadreJeu = document.getElementById(name);
                cadreJeu.style.transition = "0.3s";
                cadreJeu.style.transform = "scale(1.1)";
            }
        }

        function atrEnd(x) {
            let isAccueil = window.location.href.split('/').pop();
            if(isAccueil === "") {
                let name = x.innerText || x.textContent;
                let cadreJeu = document.getElementById(name);
                cadreJeu.style.transform = "scale(1)";
            }
        }


        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }


    </script>
</body>
</html>
