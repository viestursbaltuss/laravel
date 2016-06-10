<?php


Route::get('sadala1', function () {

    return view('sad1');

});
Route::get('sadala2', function () {

    return view('sad2');

});
Route::get('sadala3', function () {

    return view('sad3');

});

Route::get('/', 'HomeController@index');


Route::get('about','PagesController@home');
Route::get('control', 'control@index');


Route::get('/home', 'HomeController@index');
