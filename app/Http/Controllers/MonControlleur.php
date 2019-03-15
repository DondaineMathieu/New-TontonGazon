<?php

namespace TontonGazon\Http\Controllers;

use Illuminate\Http\Request;
use TontonGazon\User;
use TontonGazon\Demande;
use Illuminate\Support\Facades\Auth;

class MonControlleur extends Controller
{
    public function index() {
        $annonces = Demande::all();
        return view("index");
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
        return view('creer_annonce');
    }

    public function logout() {
        Auth::logout();
        return view("index");
    }
}
