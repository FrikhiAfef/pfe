<?php

namespace App\Http\Controllers\utilisateur;


use App\actualite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(actualite $actualite){
        $actualites= $actualite::all();
        return view('utilisateur.layoutstest.hometest',compact('actualites'));
        return view('utilisateur.layoutstest.hometest',compact('actualite'));
    }
}
