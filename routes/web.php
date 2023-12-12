<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class,'homepage'])->name('homepage');

// Rotta per mostrare film
Route::get('/movie/index',[MovieController::class,'movieIndex'])->name('movieIndex');
//Rotta parametrica per vedere il dettaglio dei film
Route::get('/movie/detail/{id}',[MovieController::class,'moviesDetail'])->name('moviesDetail');

Route::get('/contact-us', [PublicController::class,'contact_us'])->name('contact_us');

