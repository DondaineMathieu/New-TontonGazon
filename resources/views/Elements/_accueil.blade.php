<div>
    @guest
    <div class="accueil-guest-container">
        <div class="bienvenu"></div>
    </div>
    @elseif(Auth::user()->role == "tondu")
    <div class="accueil-tondu-container">
        <div class="accueil-tondu-bonjour">Bonjour <b>{{Auth::user()->prenom}},</b> {{-- vous etes un <b>Tondu</b> --}}
        </div>

        <div class="accueil-titre">Vos annonces :</div>
        <div class="grid">
            <div class="left">
                <div class="container-annonces">
                    <div> Vous n'avez pas encore d'annonce type </div>
                    @foreach ($annonces as $a)
                        @if($a->id_tondu == Auth::user()->id)
                            @if($a == null)
                                <div> Vous n'avez pas encore d'annonce type </div>
                            @endif
                        <div class="annonce-solo">
                            <div class="titre-annonce">{{$a->titre}}</div>
                            <div class="texte-annonce">{{$a->texte}}</div>
                            <div class="lien-annonce"><a href="/annonce/{{$a->id}}">Voir l'annonce ></a></div>
                        </div>
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
                @if($a->id_tondu == Auth::user()->id && $r->id_annonce == $a->id && $u->id == $r->id_tondeur)
                <div style="display:none;">{{$rep=true}}</div>
                <div class="detail-reponse">
                    <div>
                        <a href="utilisateur/{{$r->id_tondeur}}"> {{$u->prenom}} </a>
                        souhaite repondre à votre annonce : <a href="annonce/{{$a->id}}">{{$a->titre}}</a> <br />
                        <div class="reponse-choix">
                            <a id="reponse-accepeter" href="/reponse/accepter"> Accepter </a>
                            <a id="reponse-refuser" href="/reponse/refuser"> Refuser </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
            @endforeach
        </div>
        @if($rep==false)
        <div>Vous n'avez pas de reponse pour le moment </div>
        @endif

        <div class="container-statistiques">
            <div class="accueil-titre">Statistiques :</div>
            <div style="display:none;">{{$totalAnnonce=0}} {{$totalReponse=0}}{{$annonceEnded=0}} {{$annonceSurface=0}} {{$annonceArgent=0}}</div>
            <div>
                Vous avez creer @foreach($annonces as $a) @if($a->id_tondu == Auth::user()->id) <div style="display:none;">{{$totalAnnonce=$totalAnnonce+1}}</div> @endif @endforeach <b>{{$totalAnnonce}} annonce(s)</b>
                Vous cumulé @foreach($annonces as $a) @if($a->id_tondu == Auth::user()->id) <div style="display:none;">{{$totalReponse=$totalReponse+1}}</div> @endif @endforeach <b>{{$totalReponse}} reponse(s)</b>
            </div>
        </div>

        <div class="accueil-titre">Vos annonces passées :</div>
        <div class="grid">
            <div class="left">
                <div class="container-annonces">
                    @foreach ($annonces as $a)
                        @if ($date > $a->date_tonte && $a->id_tondu == Auth::user()->id )
                            <div class="annonce-solo">
                                <div class="titre-annonce">{{$a->titre}}</div>
                                <div class="texte-annonce">{{$a->texte}}</div>
                                <div class="lien-annonce"><a href="/annonce/{{$a->id}}">Voir l'annonce ></a></div>
                            </div>
                        @else
                        @endif
                    @endforeach
                    {{-- @foreach ($annonces as $a)
                    @if($a->id_tondu == Auth::user()->id && $a->date_tonte <= $todayDate )
                    <div style="display:none">{{$annoncesPassee=true}}</div>
                    <div class="annonce-solo">
                        <div class="titre-annonce">{{$a->titre}}</div>
                        <div class="texte-annonce">{{$a->texte}}</div>
                        <div class="lien-annonce"><a href="/annonce/{{$a->id}}">Voir l'annonce ></a></div>
                    </div>
                    @endif
                    @if($annoncesPassee==false)
                        <div></div>
                    @endif --}}
                </div>
            </div>

            <div class="right"> </div>
        </div>


        <div id="footer-img">
            @include('Elements/_footer-img')
        </div>

        
    </div>
</div>
@else
<p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondeur</b> </p>
@endguest
</div>