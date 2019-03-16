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
    
        
@else
    <p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondeur</b> </p>
@endguest
</div>
