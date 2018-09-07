<?php

Route::get('/', function () {
    return view('/welcome');
});

Route::resource('cruds', 'CrudController');
Route::delete('/cruds/{id}', 'CrudController@destroy');
