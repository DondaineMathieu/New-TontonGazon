@extends('layouts.app')

@section('content')

<div class="container-information" id="politique-confidentialite">
    <h2> Vos données </h2>

    <div class="list-donnee" id="list-donnee-utilisateur">
        <ul>
            <li>
                <b>Vos informations Personnelles</b>
                @foreach ($utilisateur as $u)
                    <ul>
                        <li> <b> Votre id : </b> {{$u->id}} </li>
                        <li> <b> Votre nom : </b> {{$u->nom}} </li>
                        <li> <b> Votre prenom : </b> {{$u->prenom}} </li>
                        <li> <b> Votre email : </b> {{$u->email}} </li>
                        <li> <b> Votre tel : </b> {{$u->tel}} </li>
                        <li> <b> Votre ville : </b> {{$u->ville}} </li>
                        <li> <b> Votre code postal : </b> {{$u->code_postal}} </li>
                        <li> <b> Votre adresse : </b> {{$u->adresse1}} </li>
                        <li> <b> Votre complement d'adresse : </b> {{$u->adresse2}} </li>
                    </ul> 
                @endforeach
            </li>
            <li>
                <b>Informations sur vos annonces</b>
                @foreach ($annoncesUtilisateur as $a)
                    <ul>
                        <li> <b> Id annonce : </b> {{$a->id}} </li>
                        <li> <b> Date de tonte: </b> {{$a->date_tonte}} </li>
                        <li> <b> Titre de l'annonce : </b> {{$a->titre}} </li>
                        <li> <b> Texter de l'annonce : </b> {{$a->texte}} </li>
                        <li> <b> Surface de l'annonce : </b> {{$a->surface}} </li>
                        <li> <b> Prix : </b> {{$a->prix}} </li>
                        <br />
                    </ul>
                @endforeach
            <li>
                <b>Informations sur vos reponses</b>
                @foreach ($reponsesUtilisateurTondu as $r1)
                @foreach ($reponsesUtilisateurTondeur as $r2)
                    <ul>
                        <li> <b> Id annonce : </b> {{$r1->id}} </li>
                        <li> <b> Date de reponse: </b> {{$r1->date_reponse}} </li>
                        <li> <b> Etat de la reponse </b> {{$r1->etat}} </li>
                        <br />
                        <li> <b> Id annonce : </b> {{$r2->id}} </li>
                        <li> <b> Date de reponse: </b> {{$r2->date_reponse}} </li>
                        <li> <b> Etat de la reponse : </b> {{$r2->etat}} </li>
                        <br />
                    </ul>
                @endforeach
                @endforeach
            </li>
            <li>
                <b>Informations sur vos avis reçus/publiés</b>
                @foreach ($avisUtilisateurTondu as $a1)
                @foreach ($avisUtilisateurTondeur as $a2)
                    <ul>
                        <li> <b> Id avis : </b> {{$a1->id}} </li>
                        <li> <b> Date de publication: </b> {{$a1->date_publi}} </li>
                        <li> <b> Titre de l'avis : </b> {{$a1->titre}} </li>
                        <li> <b> Texter de l'avis : </b> {{$a1->texte}} </li>
                        <li> <b> Note de l'avis : </b> {{$a1->note}} </li>
                        <br />
                        <li> <b> Id avis : </b> {{$a2->id}} </li>
                        <li> <b> Date de publication: </b> {{$a2->date_publi}} </li>
                        <li> <b> Titre de l'avis : </b> {{$a2->titre}} </li>
                        <li> <b> Texter de l'avis : </b> {{$a2->texte}} </li>
                        <li> <b> Note de l'avis : </b> {{$a2->note}} </li>
                        <br />
                    </ul>
                @endforeach
                @endforeach
                </li>
        </ul>
    </div>

</div>





@endsection