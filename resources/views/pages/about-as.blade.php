
    @extends('layouts/base', ['title' => 'about-as'])
    
        @section('content')
            <img src="{{asset('/images/siptiane.jpg')}}" alt="photo de l'hauteur" class="round img-fluid">
            <p class="">
                Construit avec <span class="text-pink">&hearts;</span> par SIPTIANE KULAPA.
            </p>
            <a href="{{route('home')}}" class="link">Revenir a la page d'accueil</a>
        @endsection
     
