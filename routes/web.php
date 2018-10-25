<?php

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {
    Route::get('/', ['uses'=>'DashboardController@index', 'as'=>'dash']);
    Route::resource('categories', 'CategoriesController');
    Route::resource('empresas', 'EmpresasController');
    Route::resource('clientes', 'ClientesController');
    Route::resource('divipola', 'divipolaController');
    Route::resource('habitos', 'habitosController');
    Route::resource('ocupaciones', 'ocupacionesController');
    Route::resource('especialidades', 'especialidadesController');
    Route::resource('tipoexamenes', 'tipoexamenesController');
    Route::resource('expuestoas', 'expuestoasController');
    Route::resource('users', 'UsersController')->middleware('Role:Superadmin|Admin');
    Route::get('profileedit/{id}', 'ProfileController@edit');
    Route::put('profileupdate/{id}', 'ProfileController@update');
});
