<?php

namespace App\Http\Controllers\utilisateur;

use App\actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualiteController extends Controller
{
    public function actualite(actualite $actualite ){
        $actualites= $actualite::all();
        return view('utilisateur.layoutstest.actualitetest',compact('actualites'));
        return view('utilisateur.layoutstest.actualitetest',compact('actualite'));
    }
}
