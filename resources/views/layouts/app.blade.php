<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PETDIET') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/petdiet.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-header navbar-expand-md navbar-light " style="background-color:#ffe4e1">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name','PETDIET') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                            <div class="text-center col-md-20 mx-auto col-lg-20">
                                <a href="{{ action('EventController@index', ['id' => Auth::user()->mypets[0]->id]) }}"><h1 contenteditable="true">{{ Session::get('targetDay')->format('Y/m/d(D)')}}</h1></a>
                            </div>
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <p><a href="{{ action('HomeController@index', ['id' => Auth::user()->mypets[0]->id]) }}">HOME</a></p>
                        </ul>
                        
                        
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
