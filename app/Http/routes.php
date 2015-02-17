<?php


Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/collection/{id}', 'PagesController@collection');
Route::post('/', 'PagesController@store');

Route::resource('collections', 'CollectionsController');
Route::resource('art', 'ArtController');
Route::resource('carousel', 'CarouselController');
Route::resource('circle', 'CircleController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);