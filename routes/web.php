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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'MainController@home')->name('main.home');

Route::resource('products', 'ProductController');

/*
GET /products => index
POST /products => create
GET /products/create => formulario para crear

GET /products/:id => mostrar un produdcto con id
GET /products/:id/edit => formulario para editar 
PUT/PATCH/ /products/:id => actualizar registro
DELETE /products/:id => eliminar
*/