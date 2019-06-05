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

// Route::get('/', function () {
//     return view('pages.home');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('pages.home');

Route::get('/', function () {
    return view('pages.home');
})->name('pages.home')->middleware('auth');


Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about')->middleware('auth');

Route::get('/company', function () {
    return view('pages.company');
})->name('pages.company')->middleware('auth');


