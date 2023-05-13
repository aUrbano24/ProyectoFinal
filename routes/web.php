<?php

<<<<<<< HEAD
use App\Http\Controllers\HolaController;
=======
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
<<<<<<< HEAD
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
=======
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD

Route::get('/menu', function () {
    return view('menu');
});


/**EJEMPLO PARA PASARME DATOS POR LA URL */
/*Route::get('/hola/{name}', HolaController::class);*/


//Route::get('/hola/{name}', [HolaController::class, "index"]);

//Esto hay que poner en la view
/*{{--HOLA {{$name}} desde  {{config('app.name')}}--}}*/
=======
>>>>>>> 0b4b265a726d64cd767a74b5c052d962eaab9194
