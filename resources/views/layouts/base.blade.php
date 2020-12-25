<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ base_title($title ?? null) }}</title>
    </head>
    <body>
        <div id="wrapper" class="text-center">
            <div class="container">
                <main rol="main" class="col-md-6">
                    @yield('content')
                </main>

                @include('layouts/partials/_footer')
            </div>
        </div>
    </body>
</html>
