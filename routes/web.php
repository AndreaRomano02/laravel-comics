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
  return view('home');
})->name('movie');

Route::get('/tv', function () {
  return view('home');
})->name('tv');

Route::get('/games', function () {
  return view('home');
})->name('games');

Route::get('/collectibles', function () {
  return view('home');
})->name('collectibles');

Route::get('/videos', function () {
  return view('home');
})->name('videos');

Route::get('/fans', function () {
  return view('home');
})->name('fans');

Route::get('/news', function () {
  return view('home');
})->name('news');

Route::get('/shop', function () {
  return view('home');
})->name('shop');

Route::get('/single-comic', function () {
  return view('single-comic');
})->name('single-comic');
