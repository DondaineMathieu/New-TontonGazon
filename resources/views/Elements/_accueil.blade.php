<div>
@guest
    pas log
@elseif(Auth::user()->role == "tondu")
    <p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondu</b> </p>

    <h3>Voici la liste de vos annonces :</h3>
    {{-- @foreach ($annonces as $as)
        @if($as->id_tondu == Auth::user()->id)
            <div>
                {{$as->titre}}
            </div>
        @endif    
    @endforeach --}}
@else
    <p>Bonjour <b>{{Auth::user()->prenom}} {{Auth::user()->nom}}</b> vous etes un <b>Tondeur</b> </p>
@endguest
</div>
