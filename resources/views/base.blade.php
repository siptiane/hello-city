<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',config('app.name'))</title>
    </head>
    <body>
        <div id="wrapper" class="text-center">
            <div class="container">
                <main rol="main" class="col-md-6">
                    @yield('content')
                </main>
                
                <footer class="offset-3 col-md-6 col-sm-6">
                   <span class="">&copy Copyright {{date('Y')}}</span> 
                    @if(! Route::is('about'))
                    &middot <a href="{{route('about')}}" class="link">A propos</a>
                    @endif
                </footer>
            </div>
        </div>
    </body>
</html>
