<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-city</title>

        
    <body>
        <h1>Bonjour Kinshasa</h1>
        <p> Il est actuellement {{date('H:i')}} </p>

        <footer>
            &copy Copyright {{date('Y')}} &middot <a href="/about-as">A propos</a>
        </footer>
    </body>
</html>
