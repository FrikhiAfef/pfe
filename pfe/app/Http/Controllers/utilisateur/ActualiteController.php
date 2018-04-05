<?php

namespace App\Http\Controllers\utilisateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActualiteController extends Controller
{
    public function index(){
        return view('utilisateur.actualite');
    }
}
