<?php

Route::get('/', function () {
    return view('authentication.login');
});

Route::group(['middleware'=>'visitors'], function() {
    Route::get('/register','RegistrationController@register');
    Route::post('/register','RegistrationController@postRegister');

    Route::get('/login','LoginController@login');
    Route::post('/login','LoginController@postLogin');
}); 

Route::post('/logout','LoginController@logout');


// Seluruh password adalah '123' baik admin,manager maupun visitor.
// aktifasi sementara dilakukan secara manual di tabel Activation
// default Roles user selalu 'visitor'.


// Route::get('/activate/{email}/{activationCode}','ActivationController@activate');

Route::get('product', 'ProductController@index');


Route::get('admin-item-karyawan', 'ItemKaryawanController@manageItemKaryawan')->middleware('admin');
Route::get('manager-item-karyawan', 'ItemKaryawanController@manageItemKaryawan')->middleware('manager');
Route::resource('item-karyawan', 'ItemKaryawanController');
