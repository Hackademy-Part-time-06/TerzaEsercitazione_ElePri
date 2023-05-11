<?php

use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;

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

//Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');
//Route::get('/singolo-mese/{ref}', [PageController::class, 'dettaglio'])->name('detail');

Route::get('/homepage', [Homepage::class , 'homepage'])->name('homepage');
Route::get('/posti', [Homepage::class , 'detail'])->name('dettagli');
