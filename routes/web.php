<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\BookController;


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

//pasa la vista welcome
Route::get('/', function () {
    return view('welcome');
}); 

//pasa la vista home
Route::get('home', function () {
    return view('home');
}); 

/* Route::get('munic', function () {
    return view('munic');
});  */

//pasa todas las rutas de libros
Route::resource('libro', 'App\Http\Controllers\BookController');

//pasa las rutas de autores
Route::resource('autor', 'App\Http\Controllers\AutorController');

//pasa las rutas de los municipios 
Route::resource('catalogo', 'App\Http\Controllers\CatalogoController');
 
/* Route::get('/', [BookController::class, 'index']); 
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::delete('books', [BookController::class, 'destroy'])->name('books.destroy');  */




