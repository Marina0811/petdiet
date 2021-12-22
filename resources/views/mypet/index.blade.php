<!DOCTYPE html>
@extends('layouts.layout')

@section('title', 'Mypet')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ペット情報一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('MypetController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('MypetController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">ペットの名前</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value={{ $cond_title }}>
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="admin-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">名前</th>
                                <th width="20%">生年月日</th>
                                <th width="10%">性別</th>
                                <th width="10%">種別</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $mypet)
                                <tr>
                                    <th>{{ $mypet->id }}</th>
                                    <td>{{ str_limit($mypet->name, 100) }}</td>
                                    <td>{{ str_limit($mypet->birthday, 250) }}</td>
                                    <td>{{ str_limit($mypet->gender, 100) }}</td>
                                    <td>{{ str_limit($mypet->kind, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('MypetController@edit', ['id' => $mypet->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('MypetController@delete', ['id' => $mypet->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection