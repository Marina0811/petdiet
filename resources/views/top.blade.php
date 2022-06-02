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
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center style="background-color:#e3f2fd;>
      <h1>PETDIET</h1>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-body">
            <a href="{{ route('login') }}"class="btn btn-lg btn-block btn-outline-secondary">ログイン</a>
            <a href="{{ route('register') }}"class="btn btn-lg btn-block btn-outline-secondary">新規登録</a>
          </div>
        </div>
    </div>
</body>
</html>
