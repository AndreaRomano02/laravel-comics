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
  return view('home');
})->name('characters');

Route::get('/comics', function () {
  return view('comics');
})->name('comics');

Route::get('/movie', function () {
  return view('movie');
})->name('movie');

Route::get('/tv', function () {
  return view('tv');
})->name('tv');

Route::get('/games', function () {
  return view('games');
})->name('games');

Route::get('/collectibles', function () {
  return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
  return view('videos');
})->name('videos');

Route::get('/fans', function () {
  return view('fans');
})->name('fans');

Route::get('/news', function () {
  return view('news');
})->name('news');

Route::get('/shop', function () {
  return view('shop');
})->name('shop');

Route::get('/single-comic', function () {
  return view('single-comic');
})->name('single-comic');
