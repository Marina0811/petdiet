<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/petdiet.css') }}" rel="stylesheet">
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{-- 画面上部に表示するナビゲーションバーです。 --}}
            <div class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color:#ffe4e1;">
                <div class="container-fluid　justify-content-start row">
                    <div class="col-md-3">
                        <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'PETDIET') }}
                        </a>
                    </div>
                <div class="col-md-6">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        
                        <!-- Right Side Of Navbar -->
                             <div class="text-center col-md-20 mx-auto col-lg-20">
                                <a href="{{ action('EventController@index', ['id' => Auth::user()->mypets[0]->id]) }}"><h1 contenteditable="true">{{ Session::get('targetDay')->format('Y/m/d(D)')}}</h1></a>
                            </div>

                        <!-- Right Side Of Navbar -->
                            <p><a href="{{ action('HomeController@index', ['id' => Auth::user()->mypets[0]->id]) }}">HOME</a></p>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー --}}
            
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>