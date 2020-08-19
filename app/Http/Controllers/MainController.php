<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jeu;
use App\Video;

class MainController extends Controller
{

//    Page d'acceuil
    public function accueil(){
        return view("accueil");
    }



//  Les différentes pages selon les jeux
    public function videoPrinter(){
        $name = last(request()->segments());
        $video = Video::join('jeux', 'videos.ID_jeu', '=', 'jeux.ID_jeu')
                        ->where('jeux.nameG', '=', $name)
                        ->get();

        return view("videoPrint", array('namePage'=>$name, 'dataVideo'=>$video));
    }

}
