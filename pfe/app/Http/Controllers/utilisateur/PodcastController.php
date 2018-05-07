<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\podcast;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PodcastController extends Controller
{
    public function podcast (podcast $podcast){
        $podcasts= $podcast::all();
        return view('utilisateur.layoutstest.podcasttest',compact('podcasts'));
        return view('utilisateur.layoutstest.podcasttest',compact('podcast'));
    }
}
