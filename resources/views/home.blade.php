@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <h1>Petdiet　Home</h1>
    
    <h2>
        <div class="d-flex flex-column bd-highlight mb-3">

            @if(Auth::user()->mypets->count()>0)
            <div class="p-2 bd-highlight">
                <a href="{{ action('WeightController@create', ['id' => Auth::user()->mypets[0]->id]) }}">体重登録</a>
            </div>
            
            <div class="p-2 bd-highlight">
                <a href="#">メモ</a>
            </div>
                    
            <div class="p-2 bd-highlight">
                <a href="{{ action('EventController@index', ['id' => Auth::user()->mypets[0]->id]) }}">カレンダー</a>
            </div>
            
            <div class="p-2 bd-highlight">
                <a href="#">ペット登録</a>
            </div>

            
            <div class="p-2 bd-highlight">
                <a href="{{ action('MypetController@edit', ['id' => Auth::user()->mypets[0]->id]) }}">ペット編集</a>
            </div>
            @else
            <div class="p-2 bd-highlight">
                <a href="{{ action('MypetController@create') }}">ペット登録</a>
            </div>
            @endif
        </h2>
        
        </div>
        
    </h2>
    </div>
</div>
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection
