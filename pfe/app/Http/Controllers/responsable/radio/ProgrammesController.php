<?php

namespace App\Http\Controllers\responsable\radio;

use App\Model\responsable\radio\programme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgrammesController extends Controller
{

    public function index()
    {
        $listeprog = programme::all();
        return view('superadmin.programmes.programme',['programmes' => $listeprog]);
    }


    public function create()
    {
        return view('superadmin.programmes.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'nomE'=>'required',
            'nomAnim'=>'required',
            'prenomAnim'=>'required',
            'description'=>'required',
            'image'=>'required',
            'heure'=>'required',
            'jours'=>'required',

        ]);


        $prog = new programme;


        $prog->nomE = $request->input('nomE');
        $prog->nomAnim = $request->input('nomAnim');
        $prog->prenomAnim = $request->input('prenomAnim');
        $prog->description = $request->input('description');
        $prog -> image = $request->input('image');
        $prog->heure = $request->input('heure');
        $prog->jours = $request->input('jours');

        $prog->save();
        session()->flash("delete","Le programme à été bien ajouté ");

        return redirect(route('programme.index'));
    }


    public function show($id)
    {
        $programme = programme ::find($id);
        return view('superadmin.programmes.show',['programmes' => $programme]);
    }


    public function edit($id)
    {
        $programme = programme::find($id);
        return view('superadmin.programmes.edit',['programme' => $programme]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nomE'=>'required',
            'nomAnim'=>'required',
            'prenomAnim'=>'required',
            'description'=>'required',
            'image'=>'required',
            'heure'=>'required',
            'jours'=>'required',

        ]);

        $prog = programme::find($id);
        $prog->nomP = $request->input('nomE');
        $prog->nomAnim = $request->input('nomAnim');
        $prog->prenomAnim = $request->input('prenomAnim');
        $prog->description = $request->input('description');
        $prog -> image = $request->input('image');
        $prog->heure = $request->input('heure');
        $prog->jours = $request->input('jours');

        $prog->save();

        //une seul  session pour afiicher le message de success
        session()->flash('success','Le membre à été bien modifier ');
        //apres le modification
        return redirect(route('programme.index'));
    }


    public function destroy($id)
    {
        $prog = programme::find($id);
        $prog->delete();
        return redirect(route('programme.index'));

        //une seul  session pour afiicher le message de success
        session()->flash("delete","Le programme à été bien supprimer ");
    }
}
