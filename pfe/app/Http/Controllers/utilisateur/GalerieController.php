<?php

namespace App\Http\Controllers\utilisateur;

use App\Model\responsable\radio\galerie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalerieController extends Controller
{
    public function galerie( galerie $galerie){
        $galeries= $galerie::all();
        return view('utilisateur.layoutstest.galerietest',compact('galeries'));
        return view('utilisateur.layoutstest.galerietest',compact('galerie'));
    }
}
