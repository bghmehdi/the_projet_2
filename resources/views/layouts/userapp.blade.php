<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/style.css','resources/js/app.js'])
    @vite(['resources/css/sun.css'])
    
</head>
<body>
    <nav class="navMenu">
        <a id="logo" href="{{ url('/') }}"><i class="fa-brands fa-laravel"></i> laravel</a>
        {{-- <ul class="auth"> --}}
            @guest
            @if (Route::has('login'))
                
                    <a style="margin-left: auto" href="{{ route('login') }}">{{ __('Login') }}</a>
                
            @endif

            @if (Route::has('register'))
                
                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                
            @endif
        @else
            
                {{-- <a >
                    {{ Auth::user()->name }}
                </a> --}}

                
                    <a style="margin-left: auto" href="{{route('profile.index')}}"><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</a>   
                    <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        {{-- </ul> --}}
      </nav>
    
        <div id="shine"></div>
        <main>
            <div>@yield('content')</div>
        </main>
    
</body>

</html>
