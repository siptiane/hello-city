
    @extends('base')

        @section('title','A propos | '.config('app.name'))
    
        @section('content')

            <img src="/images/siptiane.jpg" alt="">
            <p>Construit avec &hearts; par SIPTIANE KULAPA.</p>
            <a href="{{route('home')}}">Revenir a la page d'accueil</a>
        @endsection
     
