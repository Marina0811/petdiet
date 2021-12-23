<!DOCTYPE html>
@extends('layouts.layout')

@section('title', 'Myペットの体重登録')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>体重登録　Carbon::now()</h2>
     
      
      <form action="{{ action('WeightController@create') }}" method="post" enctype="multipart/form-data">
        
         @if (count($errors) > 0)
          <ul>
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach 
          </ul> 
        @endif
          
        
        
        </form>
      </div>
    </div>
  </div>
  @endsection