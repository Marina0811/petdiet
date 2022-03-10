@extends('layouts.app')

@section('content')
    <h1>Petdiet　Home</h1>
    <h2>摂取カロリー・消費カロリー表示</h2>

        <ul>

            <li><a href="{{ action('WeightController@create', ['id' => Auth::user()->mypets[0]->id]) }}">体重登録</a></li
            <li><a href="#">メモ</a></li>
            <li><a href="{{ action('EventController@index', ['id' => Auth::user()->mypets[0]->id]) }}">カレンダー</a></li>
            <li><a href="#">ペット登録</a></li>

            @if(Auth::user()->mypets->count()>0)
            <li><a href="{{ action('MypetController@edit', ['id' => Auth::user()->mypets[0]->id]) }}">ペット編集</a></li>
            @else
            <li><a href="{{ action('MypetController@create') }}">ペット登録</a></li>
            @endif
        </ul>
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection
