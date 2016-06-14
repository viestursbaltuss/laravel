<?php


Route::get('sadala1', function () {

    return view('sad1');

});


Route::get('/', 'HomeController@index');
Route::get('/list', 'HomeController@getList');
// Route::get('about','PagesController@home');
// Route::get('control', 'control@index');
