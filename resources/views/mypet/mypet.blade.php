<!DOCTYPE html>
@extends('layouts.layout')

@section('title', 'Mypet')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>Myペット登録</h2>
     
      
      <form action="{{ action('MypetController@create') }}" method="post" enctype="multipart/form-data">
        
         @if (count($errors) > 0)
          <ul>
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach 
          </ul> 
        @endif
          
        <div class="form-group row"> 
          <label class="col-md-2">名前</label>
            <div class="col-md-10"> 
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>
        </div>
        
        <div class="form-group row"> 
          <label class="col-md-2">生年月日</label>
            <div class="col-md-10"> 
              <input type="text" class="form-control" name="birthday" value="{{ old('birthday') }}">
            </div>
        </div>
        
        <div class="form-group row">
          <label for="radio01" class="col-md-2">性別</label>
              <div class="col-md-10">
              
                <div class="form-check form-check-inline"> 
                  <input class="form-check-input" type="radio" id="inlineRadio01" name="gender" value="1"> 
                  <label class="form-check-label" for="inlineRadio01">オス</label>
                </div>
                <div class="form-check form-check-inline"> 
                  <input class="form-check-input" type="radio" id="inlineRadio02" name="gender" value="2" checked="checked">
                  <label class="form-check-label" for="inlineRadio02">メス</label> 
                </div>
              </div>  
        </div>
                
        <div class="form-group row">
           <label class="col-md-2">種別</label>
              <div class="col-md-10"> 
                <input type="text" class="form-control" name="kind" value="{{ old('kind') }}"> 
              </div>
        </div>
        
        <div>
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
        </div>
        
        </form>
      </div>
    </div>
  </div>
  @endsection