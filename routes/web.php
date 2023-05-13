<?php

use App\Http\Controllers\HolaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});


/**EJEMPLO PARA PASARME DATOS POR LA URL */
/*Route::get('/hola/{name}', HolaController::class);*/


//Route::get('/hola/{name}', [HolaController::class, "index"]);

//Esto hay que poner en la view
/*{{--HOLA {{$name}} desde  {{config('app.name')}}--}}*/
