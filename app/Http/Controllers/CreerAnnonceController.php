<?php

namespace TontonGazon\Http\Controllers;

use TontonGazon\Demande;
use TontonGazon\DemandeType;
use TontonGazon\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use TontonGazon\User;
use Illuminate\Support\Facades\Auth;

class CreerAnnonceController extends Controller
{
    protected function create(Request $request)
    {
        Demande::create([
            'titre' => $request->input('titre'),
            'texte' => $request->input('texte'),
            'surface' => $request->input('surface'),
            'prix' => $request->input('prix'),
            'date_tonte' => $request->input('date_tonte'),
            'id_tondu' => \Auth::user()->id,
        ]);
        return view('home');
    }

    protected function createtype(Request $request)
    {
        Demande::create([
            'titre' => $request->input('titre'),
            'texte' => $request->input('texte'),
            'surface' => $request->input('surface'),
            'prix' => $request->input('prix'),
            'id_tondu' => \Auth::user()->id,
        ]);
        return view('home');
    }
}