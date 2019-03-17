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

    @foreach ($annoncetype as $at)
        @if($at->id_tondu == Auth::user()->id)
            <h1>Voici votre annonce type :</h1>
            <div>{{$at->titre}}</div>
            <div>{{$at->texte}}</div>
            <div>{{$at->surface}} m²</div>
            <div>{{$at->prix}} €</div>
            <a href="/creer-annoncetype">Modifier mon annonce type</a>
        @else
            <h1>Vous n'avez pas d'annonce type</h1>
            <h2><a href="/creer-annoncetype">Creer une annonce type</a></h2>
        @endif
    @endforeach

    <div> Les reponses a vos annonces </div>
    @foreach($annonces as $a)
        @if($a->id_tondu == Auth::user()->id)
            
        @endif 
    @endforeach

@else
    <p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondeur</b> </p>
@endguest
</div>
