    
    @extends('base')
    
        @section('title', config('app.name'))
    
        @section('content')

            <img src="/images/drapeau.jpg" alt="drapeu de la rdc">
            <h1>Bonjour Kinshasa</h1>
            <p> Il est actuellement {{date('H:i')}} </p>
        @endsection
    
