<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Validation\Validator;
use App\Jeu;
use App\Video;
use App\User;

class AccountController extends Controller
{

    public function param(){
        return view('param');
    }




    public function addVideo(){

        return view('addvideo');
//        Video::create([
//            /*#TODO Ajout d'une vidéo Storage:file*/
//        ]);
    }

    public function store(Request $request)
    {
        // $file = $request->file('image');

        $request->validate([
            'name' => ['required'],
            'jeu' => ['required'],
            'idUser' => ['required'],
            'video' => "required|file",
        ]);

//        dd($request->video);

        $name = $request->name;
        $jeu = $request->jeu;
        $user = $request->idUser;
        $video = $request->video;

        switch ($jeu){
            case 1 :
                $nameG = "fortnite";
                break;
            case 2 :
                $nameG = "apex";
                break;
            case 3 :
                $nameG = "overwatch";
                break;
            case 4 :
                $nameG = "valorant";
                break;
        }

        $videoname = $name.'.'.$video->getClientOriginalExtension();
        $stockage = public_path("storage/video/".$nameG);
        $video->move($stockage, $videoname);

        $newVideo = new Video;
        $newVideo->name = $videoname;
        $newVideo->ID_jeu = $jeu;
        $newVideo->ID_user = $user;
        $newVideo->save();

        return redirect('/');

    }




    public function myVideo(){
        /*#TODO afficher les vidéos selon ID user*/
        $video = Video::join('jeux', 'videos.ID_jeu', '=', 'jeux.ID_jeu')
                        ->where("ID_user", "=", Auth::user()->id)
                        ->get();
        return view('myvideo', array('data_video' => $video));
    }

    public function delete(Request $request){
        $request->validate([
            'ID_video' => ['required'],
        ]);

        $video = Video::find($request->ID_video);
        $video->delete();

        return redirect('/myvideo');
    }
}
