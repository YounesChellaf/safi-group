<?php

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

Route::get('/', function () {
    return view('landing');
})->name('home');
Route::get('/insurance', function () {
    return view('fields.insurance');
})->name('insurance');
Route::get('/legal', function () {
    return view('fields.legal');
})->name('legal');
Route::get('/medical', function () {
    return view('fields.medical');
})->name('medical');
Route::get('/trading', function () {
    return view('fields.trading');
})->name('trading');
Route::get('/mining', function () {
    return view('fields.mining');
})->name('mining');
Route::get('/information-technology', function () {
    return view('fields.it');
})->name('it');

