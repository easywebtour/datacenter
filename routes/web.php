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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
     return view('home');
});


/*Route::get('/home', function(){
     return view('home');
});*/

/*Route::get('/logout', function(){
     return back();
});
Route::post('logout', 'AuthController@logout');
*/

Auth::routes();



/*Route::get('/admin', function () {
    return view('welcome');
});*/

// Route::get('/login', 'AuthController@index');
// Route::post('/login', 'AuthController@checklogin')->name('auth.checklogin');

/*Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');


Route::get('/home', 'HomeController@index')->name('home');
*/