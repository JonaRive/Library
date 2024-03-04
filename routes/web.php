<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EditorialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [BookController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth' ], function () {
    Route::get('/books', [BookController::class, 'index'])->name('home');
});

Route::resource('/books', BookController::class)->middleware('auth');
Route::resource('/authors', AuthorController::class)->middleware('auth');
Route::resource('/categories', CategorieController::class)->middleware('auth');
Route::resource('/editorials', EditorialController::class)->middleware('auth');


