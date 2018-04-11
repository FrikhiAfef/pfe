<?php

namespace App\Http\Controllers\utilisateur;

use App\apropo;
use App\Model\responsable\radio\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApropoController extends Controller
{
    public function apropo(apropo $apropo){
        $apropos= $apropo::all();
        return view('utilisateur.apropos',compact('apropos'));
        return view('utilisateur.apropos',compact('apropo'));
    }
}
