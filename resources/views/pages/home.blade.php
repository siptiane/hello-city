    
    @extends('base')
    
        @section('title', config('app.name'))
    
        @section('content')
            <h1>Bonjour Kinshasa</h1>
            <p> Il est actuellement {{date('H:i')}} </p>
        @endsection
    
