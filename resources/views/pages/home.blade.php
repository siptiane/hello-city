    
    @extends('base')
    
        @section('title', config('app.name'))
    
        @section('content')
            <img src="{{asset('/images/drapeau.jpg')}}" alt="drapeu de la rdc">
            <h1 class="text-primary">Hello from Kinshasa</h1>
            <p> Il est actuellement {{date('H:i')}} </p>
        @endsection
    
