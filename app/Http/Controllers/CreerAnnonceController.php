<?php

namespace TontonGazon\Http\Controllers;

use TontonGazon\Demande;
use TontonGazon\Http\Controllers\Controller;

class CreerAnnonceController extends Controller
{

    /**
     * Rediriger l'utilisateur apres la creation de l'annonce.
     *
     * @var string
     */
    protected $redirectTo = '/annonces';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \TontonGazon\Demande
     */
    protected function create(array $data)
    {
        return Demande::create([
            'titre' => $data['titre'],
            'texte' => $data['texte'],
            'surface' => $data['surface'],
            'prix' => $data['prix'],
        ]);
    }
}
