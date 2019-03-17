<div>
@guest
    pas log
@elseif(Auth::user()->role == "tondu")
<div class="accueil-tondu-container">
    <div class="accueil-tondu-bonjour">Bonjour <b>{{Auth::user()->prenom}},</b> {{-- vous etes un <b>Tondu</b> --}} </div>

    <div class="accueil-tondu-grid">
        <div class="accueil-tondu-left">
            <div class="accueil-tondu-vos-annonces">Vos annonces :</div>
            <div class="accueil-tondu-container-annonces">
                @foreach ($annonces as $a)
                    @if($a->id_tondu == Auth::user()->id)
                    <div class="accueil-tondu-annonce-solo">
                        <div class="accueil-tondu-titre-annonce">{{$a->titre}}</div>
                        <div class="accueil-tondu-texte-annonce">{{$a->texte}}</div>
                        <div class="accueil-tondu-lien-annonce"><a href="/annonce/{{$a->id}}">Voir l'annonce ></a></div>
                    </div>
                    @endif 
                @endforeach
            </div>
        </div>

        <div class="tondu-right">
            <div class="container-annoncestype">
                <div>Annonce Type :</div>
                @if($annonceType == false)
                    <div> t'as pas d'annonce type </div>
                    <a href="/creer-annoncetype">Creer une annonce type</a>
                @else
                    <div> T'as une annonce type </div>
                    <div class="detail-annoncetype">
                        <div class="annoncetype-titre">{{$annonceType->titre}}</div>
                        <div class="annoncetype-texte">{{$annonceType->texte}}</div>
                        <div class="annoncetype-prix">{{$annonceType->prix}}</div>
                        <div class="annoncetype-surface">{{$annonceType->surface}}</div>
                    </div>
                @endif
            </div>
            <div class="scroll">
                <div><a href="#">Voir les reponses</a></div>
                <div><a href="#">Acceder a mes statistiques</a></div>
            </div>
        </div>
    </div>

    <div class="container-reponses">
        <div>Reponses a vos demandes</div>
        {{$rep=false}}
        @foreach($annonces as $a)
            @foreach($reponses as $r)
            <div class="list-reponse">
                @if($a->id_tondu == Auth::user()->id && $r->id_annonce == $a->id)
                    <div style="display:none;">{{$rep=true}}</div>
                    <div class="detail-reponse">
                    <div>{{$r->id_tondeur}} souhaite repondre à votre annonce {{$a->id_annonce}}</div>
                        <div></div>
                    </div>            
                @endif
            </div>
            @endforeach
        @endforeach
        @if($rep==false)
            <div>Vous n'avez pas de reponse </div>
        @endif
    </div>
</div>    
@else
    <p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondeur</b> </p>
@endguest
</div>
