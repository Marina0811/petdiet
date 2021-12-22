@extends('layouts.layout')

@section('title.体重登録')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>体重登録</h2>
     
      
      <form action="{{ action('WeightController@create') }}" method="post" enctype="multipart/form-data">
        
         @if (count($errors) > 0)
          <ul>
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach 
          </ul> 
        @endif
          
        <div class="form-group row"> 
          <label class="col-md-2">今日の体重は？</label>
            <div class="col-md-10"> 
              <input type="text" class="form-control" name="today_weight" value="{{ old('today_weight') }}">
            </div>
        </div>
        {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
        </form>
      </div>
    </div>
  </div>
