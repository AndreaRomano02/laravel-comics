<?php

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

Route::get('/', function () {
  return view('welcome');
})->name('characters');

Route::get('/comics', function () {
  return view('welcome');
})->name('comics');

Route::get('/movie', function () {
  return view('welcome');
})->name('movie');

Route::get('/tv', function () {
  return view('welcome');
})->name('tv');

Route::get('/games', function () {
  return view('welcome');
})->name('games');

Route::get('/collectibles', function () {
  return view('welcome');
})->name('collectibles');

Route::get('/videos', function () {
  return view('welcome');
})->name('videos');

Route::get('/fans', function () {
  return view('welcome');
})->name('fans');

Route::get('/news', function () {
  return view('welcome');
})->name('news');

Route::get('/shop', function () {
  return view('welcome');
})->name('shop');
