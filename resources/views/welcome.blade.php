<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite([ 'resources/css/welcome.css','resources/js/welcome.js'])
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('e-learning') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div id="wrapper" data-configuration="1" data-roundness="1">
            <div class="shape" ><a class="a" href="{{ url('e-learning') }}"></a></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
          </div>
    </body>
</html>
