<div>
    @guest
    <div class="accueil-guest-container">
        <div class="accueil-container-top">
            <div id="left">
                <h1> Bienvenue sur Tonton Gazon !</h1>
                <h2> "Site de mise en relation de particulier pour la tonte de gazon" </h2>
            </div>
            <div id="right">
                <a id="inscription" href="/register">Commencer maintenant!</a> <br />
                <a id="voir" href="/annonces">Voir les annonces</a>
            </div>
        </div>
        <div class="accueil-container-informations">
            <div class="texte" id="qui-sommes-nous">
                <div><b> Qui sommes-nous ? </b></div>
                <p> 
                    Tonton Gazon est un projet développé par Mathieu Dondaine et Dimitry Pierru
                    à l'occasion d'un projet de deuxième année en DUT MMI à l'IUT de Lens.
                    <br />
                    Le site ne sera pas mis en ligne pour le moment mais nous allons garder le
                    projet de coter et gagner en expérience avant de le mettre en ligne 
                </p>
            </div>
            <div class="texte quelques-annonces">
                <div><b>Annonces récentes d'utilisateurs</b></div>
                <div style="display: none;">{{$annonceNB = 0}}</div>
                <div class="accueil-annonce-list">
                @foreach($annonces as $a)
                    @if($a->date_tonte != null && $a->date_tonte > $date)
                    <div style="display: none;">{{$annonceNB++}}</div>
                        <div class="accueil-annonce-detail">
                            <ul>
                                <li> <a href="/annonce/{{$a->id}}"> {{$a->titre}} </a> </li>
                                <li> Surface à tondre : {{$a->surface}} m²</li>
                                <li> Vous serez payé : {{$a->prix}} €</li>
                                <li> Date de tonte : {{$a->date_tonte}}</li>
                            </ul>
                        </div>
                        @if($annonceNB > 3)
                            @break
                        @endif
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>



    @elseif(Auth::user()->role == "tondu")
    <div class="accueil-tondu-bonjour">
        Bonjour <b>{{Auth::user()->prenom}},</b> 
        <div class="economie">
            Ce mois ci, vous avez dépensé : 0€
        </div>
    </div>
    <div class="accueil-tondu-container">
        <div class="grid">
            <div class="left">
                    <div class="accueil-titre">Vos annonces :</div>
                <div class="container-annonces">
                    <div> Vous n'avez pas encore d'annonce </div>
                    @foreach ($annonces as $a)
                        @if ($date < $a->date_tonte && $a->id_tondu == Auth::user()->id )
                        @if($a->id_tondu == Auth::user()->id)
                            @if($a == null)
                                <div> Vous n'avez pas encore d'annonce type </div>
                            @endif
                        <div class="annonce-solo">
                            <div class="titre-annonce">{{$a->titre}}</div>
                            <div class="texte-annonce">{{$a->texte}}</div>
                            <div class="date-annonce">Date de tonte : {{$a->date_tonte}}</div>
                            <div class="lien-annonce"><a href="/annonce/{{$a->id}}">Voir l'annonce ></a></div>
                        </div>
                        @endif
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="right">
                <div class="container-annoncestype">
                    <div class="annoncetype">Annonce Type :</div>
                    @if($annonceType == false)
                    <div> Vous n'avez pas encore d'annonce type </div>
                    <a href="/creer-annoncetype">Creer une annonce type</a>
                    @else
                    <div class="detail-annoncetype">
                        <div class="annoncetype-titre"><b>Titre : </b>{{$annonceType->titre}}</div>
                        <div class="annoncetype-texte"><b>Texte : </b>{{$annonceType->texte}}</div>
                        <div class="annoncetype-prix"><b>Prix :</b> {{$annonceType->prix}}€ soit:
                            {{round($annonceType->prix/$annonceType->surface,2)}}€/m²</div>
                        <div class="annoncetype-surface"><b>Surface :</b> {{$annonceType->surface}} m²
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="container-reponses">
            <div class="accueil-titre">Reponses a vos demandes : </div>
            {{$rep=false}}
            <div class="list-reponses">
                @foreach($annonces as $a)
                @foreach($reponses as $r)
                @foreach ($utilisateur as $u)
                @if($a->id_tondu == Auth::user()->id && $r->id_annonce == $a->id && $u->id == $r->id_tondeur && $r->etat == "En Attente")
                <div style="display:none;">{{$rep=true}}</div>
                <div class="detail-reponse">
                    <div>
                        <a href="utilisateur/{{$r->id_tondeur}}"> {{$r->id_tondeur}} </a>
                        souhaite repondre à votre annonce : <a href="annonce/{{$a->id}}">{{$a->titre}}</a> <br />
                        <div class="reponse-choix">
                            <a id="reponse-accepeter" href="/reponse-accepter/{{$r->id}}"> Accepter </a>
                            <a id="reponse-refuser" href="/reponse-refuser/{{$r->id}}"> Refuser </a>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
            @endforeach
            @endforeach
        </div>
        </div>
        @if($rep==false)
            <div class="simple-text">Vous n'avez pas de reponse pour le moment </div>
        @endif


        <div class="accueil-titre">Vos annonces passées :</div>
        <div class="grid">
            <div class="left">
                <div class="container-annonces">
                    @foreach ($annonces as $a)
                        @if ($date > $a->date_tonte && $a->id_tondu == Auth::user()->id )
                            <div class="annonce-solo">
                                <div class="titre-annonce">{{$a->titre}}</div>
                                <div class="texte-annonce">{{$a->texte}}</div>
                                <div class="date-annonce">Date de tonte : {{$a->date_tonte}}</div>
                                <div class="lien-annonce"><a href="/annonce/{{$a->id}}">Voir l'annonce ></a></div>
                            </div>
                        @else
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

{{--         
        <div class="container-statistiques">
            <div class="accueil-titre">Statistiques :</div>
            <div style="display:none;">{{$totalAnnonce=0}} {{$totalReponse=0}}{{$annonceEnded=0}} {{$annonceSurface=0}} {{$annonceArgent=0}}</div>
            <div>
                Vous avez creer @foreach($annonces as $a) @if($a->id_tondu == Auth::user()->id) <div style="display:none;">{{$totalAnnonce=$totalAnnonce+1}}</div> @endif @endforeach <b>{{$totalAnnonce}} annonce(s)</b>
                Vous cumulé @foreach($annonces as $a) @if($a->id_tondu == Auth::user()->id) <div style="display:none;">{{$totalReponse=$totalReponse+1}}</div> @endif @endforeach <b>{{$totalReponse}} reponse(s)</b>
            </div>
        </div> 
--}}
        
    </div>
</div>


@else
<div class="accueil-tondeur-bonjour">
    Bonjour <b>{{Auth::user()->prenom}},</b>
    <div class="economie">
            Ce mois ci, vous avez gagné : 0€
    </div>
</div>
<div class="accueil-tondeur-container">
    <div class="container-reponses">
        <div class="accueil-titre">Reponses a vos demandes : </div>
        <div class="list-reponses">
            @foreach($reponses as $r)
            @foreach ($annonces as $a)
                @if($r->id_tondeur == Auth::user()->id && $a->id == $r->id_annonce)
                    <div class="details-reponse">
                        <div>Votre réponse à "{{$a->titre}}" est toujours en attente</div>
                    <a href="/reponse-annuler/{{$r->id}}">Annuler</a>
                    </div>
                @endif
            @endforeach
            @endforeach
        </div>
    </div>
    <a href="/annonces"><button>Voir plus d'annonces</button></a>

    {{-- <div class="container-statistiques">
        <div class="accueil-titre">Statistiques :</div>
        <div style="display:none;">{{$totalReponses=0}}{{$totalValider=0}}{{$totalRefuser=0}}{{$totalWainting=0}}</div>
        <div>
            Vous avez répondu à @foreach($reponses as $r) @if($r->id_tondeur == Auth::user()->id) <div style="display:none;">{{$totalReponses=$totalReponses+1}}</div> @endif @endforeach <b>{{$totalReponses}} annonce(s)</b> <br />
            Vous avez tondu @foreach($reponses as $r) @if($r->id_tondeur == Auth::user()->id && $r->etat == "Valider") <div style="display:none;">{{$totalValider=$totalValider+1}}</div> @endif @endforeach <b>{{$totalValider}} tondu(s)</b><br />
            @foreach($reponses as $r) @if($r->id_tondeur == Auth::user()->id && $r->etat == "Refuser") <div style="display:none;">{{$totalRefuser=$totalRefuser+1}}</div> @endif @endforeach <b>{{$totalRefuser}}</b> de vos reponses on été <b>refusées</b><br />
            Vous avez @foreach($reponses as $r) @if($r->id_tondeur == Auth::user()->id && $r->etat == "Waiting") <div style="display:none;">{{$totalWainting=$totalWainting+1}}</div> @endif @endforeach <b>{{$totalWainting}}</b> reponses en <b>attente de reponse</b> <br />
        </div>
    </div>  --}}
</div>
@endguest
</div>