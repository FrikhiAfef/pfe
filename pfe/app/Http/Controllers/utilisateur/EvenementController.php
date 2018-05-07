<?php

namespace App\Http\Controllers\utilisateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\responsable\radio\evenement;

class EvenementController extends Controller
{
    public function evenement(evenement $evenement){
        $evenements= $evenement::all();
        return view('utilisateur.layoutstest.evenementtest',compact('evenements'));
        return view('utilisateur.layoutstest.evenementtest',compact('evenement'));
    }
}
