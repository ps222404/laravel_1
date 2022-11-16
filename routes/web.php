<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hadithcontroller;

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

Route::get('/hadith', [hadithcontroller::class, 'index']);
Route::get('/hadith/create', [hadithcontroller::class, 'create']);
Route::post('/hadith', [hadithcontroller::class, 'store'])->name('store');
Route::get('/hadith/{id}', [hadithcontroller::class, 'show']);
Route::get('/hadith/{id}/edit', [hadithcontroller::class, 'edit']);
Route::put('/hadith/{id}', [hadithcontroller::class, 'update'])->name('update');
Route::delete('/hadith/{id}', [hadithcontroller::class, 'destroy'])->name('destroy');

