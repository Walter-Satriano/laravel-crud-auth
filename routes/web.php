<?php

Auth::routes();

Route::get('/', 'CatController@index') -> name('cat.index');
Route::get('/cat/{id}', 'CatAuthController@show') -> name('cat.show');
