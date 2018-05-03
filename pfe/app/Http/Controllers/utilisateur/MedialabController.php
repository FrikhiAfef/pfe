<?php

namespace App\Http\Controllers\utilisateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mapper;

class MedialabController extends Controller
{ public function index(){
    Mapper::map(36.89509509999999, 10.188536);
return view('utilisateur.digitalmedia');
}
}
