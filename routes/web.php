<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/','TopController@index')->name('top');
 
/* 体重を登録するページに変遷するためのルーティングを作成する*/
Route::group(['middleware' => 'auth'], function() {
    


    Route::get('/weight/create','WeightController@add')->name('weight.create');
    Route::get('/weight/edit','WeightController@edit');
    Route::get('/weight/delete','WeightController@delete');

    Route::get('/mypet/create', 'MypetController@add');
    Route::post('/mypet/create', 'MypetController@create');
    Route::get('/mypet/edit', 'MypetController@edit');
    Route::post('/mypet/edit', 'MypetController@update');
    Route::post('/mypet/delete', 'MypetController@delete');
    
    Route::post('/weight/create', 'WeightController@create');
    
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/mypet', 'MypetController@index');
    
    Route::get('/calender', "EventController@index");
    
    Route::post('/store', "EventController@store");
    
    Route::get('/changeDate/{date}', "EventController@changeDate")->name('changeDate');
    

});
Auth::routes();
