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
/* Route::get('/', function () {
    return view('welcome');
}); */
 

/*  Route::get('/', 'App\Http\Controllers\BookController@index'); */

Route::get('/', [BookController::class, 'create']);
Route::get('book', [BookController::class, 'store'])->name('book.store');
Route::get('book', [BookController::class, 'destroy'])->name('book.destroy');

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 */