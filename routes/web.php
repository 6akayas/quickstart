<?php

Auth::routes();
//Route::get('sitemaps', 'SitemapsController@index');
Route::get('sitemaps/create', 'SitemapsController@create');
Route::post('sitemaps/store', 'SitemapsController@store');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/users/{id}', 'UsersController@show')->name('users.show');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('sitemaps', 'SitemapsController');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('nodes', 'NodesController');
});



