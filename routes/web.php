<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SongController;
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

Route::get('/', [PageController::class, 'index'])->name('home');

// Route::resource('songs', SongController::class);

//Rotta per lista risorsa
Route::get('songs', [SongController::class, 'index'])->name('songs.index');

//Rotta per dettaglio risorsa
Route::get('songs/{song}', [SongController::class, 'show'])->name('songs.show');

//Rotta per form creazione risorsa
Route::get('songs/create', [SongController::class, 'create'])->name('songs.create');

//Rotta per salvare dati form creazione risorsa
Route::post('songs', [SongController::class, 'store'])->name('songs.store');