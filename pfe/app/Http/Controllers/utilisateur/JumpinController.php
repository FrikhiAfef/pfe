<?php

namespace App\Http\Controllers\utilisateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\responsable\radio\jump;

class JumpinController extends Controller
{
    public function jump(jump $jump){
        $jumps= $jump::all();
        return view('utilisateur.layoutstest.jumpintest',compact('jumps'));
        return view('utilisateur.layoutstest.jumpintest',compact('jump'));

    }
}
