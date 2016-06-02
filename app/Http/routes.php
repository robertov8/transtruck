<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
GET    /usuario           - usuario.index    - Mostra list usuarios

GET    /usuario           - usuario.create   - Mostra form cadastro
POST   /usuario           - usuario.store    - Cadastra usuario

GET    /usuario/{id}      - usuario.show     - Mostra usuario detalhado

GET    /usuario/{id}/edit - usuario.edit     - Mostra form edição
PUT    /usuario/{id}      - usuario.update   - Atualiza usuario

DELETE /usuario/{id}      - usuario.destroy  - Apagar
*/
Route::resource('usuario', 'UsuarioController');


/*
// Usuario index
Route::get('/usuario' 'UsuarioController@index');
// Usuario create
Route::post('/usuario', 'UsuarioController@create');
// Usuario update
Route::put('/usuario/{id}', 'UsuarioController@update')
*/
