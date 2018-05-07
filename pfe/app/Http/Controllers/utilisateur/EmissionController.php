<?php

namespace App\Http\Controllers\utilisateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\responsable\radio\emission;

class EmissionController extends Controller
{
    public function emission( emission $emission){
        $emissions= $emission::all();
        return view('utilisateur.layoutstest.emissiontest',compact('emissions'));
        return view('utilisateur.layoutstest.emissiontest',compact('emission'));
    }
}
