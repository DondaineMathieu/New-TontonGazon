<?php

namespace TontonGazon\Http\Controllers;

use Illuminate\Http\Request;
use TontonGazon\User;
use TontonGazon\Demande;
use TontonGazon\Reponse;
use TontonGazon\Avis;
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
        $annonceType = Demande::whereRaw('date_tonte is NULL AND id_tondu=?', [Auth::id()])->get()->first();
        return view('creer_annoncetype',['annonceType' => $annonceType]);
    }

    public function supprimerAnnonceType() {
        $annonceType = Demande::whereRaw('date_tonte is NULL AND id_tondu=?', [Auth::id()])->delete();
        return redirect()->action('MonControlleur@index');
    }

    public function logout() {
        Auth::logout();
        return view("index");
    }

    public function reponseAnnuler($id) {
        Reponse::where('id', $id)->update(array('etat' => 'Annuler'));
        return view("index");
    }

    public function reponseRefuser($id) {
        Reponse::where('id', $id)->update(array('etat' => 'Refuser'));
        return view("index");
    }

    public function reponseAccepter($id) {
        Reponse::where('id', $id)->update(array('etat' => 'Accepter'));
        return view("index");
    }


    public function paiementLigne() { return view("footer/paiement"); }
    public function quiSommesNous() { return view("footer/quiSommesNous"); }
    public function pourquoiTG() { return view("footer/pourquoiTG"); }
    public function contact() { return view("footer/contact"); }
    public function recrutement() { return view("footer/recrutement"); }
    public function conditionsUtilisation() { return view("footer/conditions"); }
    public function politiqueConfidentialite() { return view("footer/politique"); }
    public function referencementControle() { return view("footer/referencement"); }
    public function mentions() { return view("footer/mentions"); }
    public function plan() { return view("footer/plan"); }
    public function donneeUtilisateur() { 
        $utilisateur = User::whereRaw('id=?', [Auth::id()])->get();
        $annoncesUtilisateur = Demande::whereRaw('id_tondu=?', [Auth::id()])->get();
        $reponsesUtilisateurTondu = Reponse::whereRaw('id_tondu=?', [Auth::id()])->get();
        $reponsesUtilisateurTondeur = Reponse::whereRaw('id_tondeur=?', [Auth::id()])->get();
        $avisUtilisateurTondu = Avis::whereRaw('id_tondu=?', [Auth::id()])->get();
        $avisUtilisateurTondeur = Avis::whereRaw('id_tondeur=?', [Auth::id()])->get();
        return view("footer/donneesUtilisateur",['utilisateur' => $utilisateur, 'annoncesUtilisateur' => $annoncesUtilisateur, 'reponsesUtilisateurTondu' => $reponsesUtilisateurTondu, "reponsesUtilisateurTondeur" => $reponsesUtilisateurTondeur, "avisUtilisateurTondu" => $avisUtilisateurTondu, "avisUtilisateurTondeur" => $avisUtilisateurTondeur]); 
    }
}
