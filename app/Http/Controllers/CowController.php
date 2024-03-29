<?php

namespace App\Http\Controllers;

use App\Cow;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CowController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $cow = Cow::findOrFail($id);
        return view('cowDetail', compact('cow'));
    }

    public function list()
    {
        $cows = Cow::all();
        return view('listaVacas', compact('cows'));
    }

    public function cadastroVacas(){

        return view('cowCadastro');

    }

    public function cadastraVacas(Request $request){

        $cow = new Cow;
    
        // dd($request, $cow);

        $cow->nome = $request->nameVaca;
        $cow->fone = $request->foneVaca;
        $cow->email = $request->emailVaca;

        $cow->save();   
    
        $cows = Cow::all();
        return view('listaVacas', compact('cows'));
    }

    public function deletarVaca($id){
        $cow = Cow::find($id);
        $cow->delete();
        $cows = Cow::all();
        return view('listaVacas', compact('cows'));
    }
}