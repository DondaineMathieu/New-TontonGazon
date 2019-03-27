<?php

namespace TontonGazon\Http\Controllers;

use Illuminate\Http\Request;
use TontonGazon\User;
use TontonGazon\Demande;
use TontonGazon\Reponse;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class MonControlleur extends Controller
{
    public function index() {
        $annonces = Demande::all();
        $utilisateur = User::all();
        $reponses = Reponse::all();
        $date = Carbon::now();
        $annonceType = Demande::whereRaw('date_tonte is NULL AND id_tondu=?', [Auth::id()])->get()->first();
        return view("index",['annonces' => $annonces, 'reponses' => $reponses, 'annonceType' => $annonceType, "utilisateur" => $utilisateur, "date" => $date]);
    }

    public function utilisateur($id) {
        $utilisateur = User::find($id);
        if($utilisateur == false) {
            return abort(404);
        } return view('utilisateur',['utilisateur' => $utilisateur]);
    }

    public function annonces() {
        $annonces = Demande::all();
        return view('annonces',['annonces' => $annonces]);
    }

    public function annonce($id) {
        $annonce = Demande::find($id);
        if($annonce == false) {
            return abort(404);
        }return view('annonce',['annonce' => $annonce]);
    }

    public function creerAnnonce() {
        $annonceType = Demande::whereRaw('date_tonte is NULL AND id_tondu=?', [Auth::id()])->get()->first();
        return view('creer_annonce',['annonceType' => $annonceType]);
    }

    public function creerAnnoncetype() {
        return view('creer_annoncetype');
    }

    public function logout() {
        Auth::logout();
        return view("index");
    }
}
