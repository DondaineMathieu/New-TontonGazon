<?php

namespace TontonGazon\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MonControlleur extends Controller
{
    public function index() {
        return view("index");
    }

    public function utilisateur($id) {
        $utilisateur = User::find($id);
        if($utilisateur == false) {
            return abort(404);
        } return view('utilisateur',['utilisateur' => $utilisateur]);
    }
}
