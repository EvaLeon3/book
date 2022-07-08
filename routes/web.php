<?php

use Illuminate\Support\Facades\Route;
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

//pasa la vista 
Route::get('/', function () {
    return view('welcome');
}); 
//pasa todas las rutas de recursos 
Route::resource('libro', 'App\Http\Controllers\BookController');
 
/* Route::get('/', [BookController::class, 'index']); 
Route::post('books', [BookController::class, 'store'])->name('books.store');
Route::delete('books', [BookController::class, 'destroy'])->name('books.destroy');  */

