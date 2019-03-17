<div>
@guest
    pas log
@elseif(Auth::user()->role == "tondu")
    <div>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondu</b> </div>

    <div>Vos annonces :</div>
    
    @foreach ($annonces as $a)
        @if($a->id_tondu == Auth::user()->id)
            <div>{{$a->titre}}</div>
            <div>{{$a->texte}}</div>
            <div><a href="/annonce/{{$a->id}}">Voir l'annonce</a></div>
        @endif 
    @endforeach

    <div> Les reponses a vos annonces </div>
    @foreach($annonces as $a)
        @foreach($reponses as $r)
            @if($a->id_tondu == Auth::user()->id && $r->id_annonce == $a->id)
                <h1>Vous avez une reponse</h1>
            @endif 
        @endforeach
    @endforeach

@else
    <p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondeur</b> </p>
@endguest
</div>
