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
    return view('auth/login');
});

Route::get('logout', function(){
    Auth::logout();
    return view('auth/login');
});

Route::get('/track',function () {
    return view('calls/track');
})->name('track')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/list', function(){ 
//     return view('calls/list');
// })->name('list')->middleware('auth');

Route::get('/list','CallController@list')->name('list')->middleware('auth');

Route::post('/call/add','CallController@add')->name('call/add');


Route::get('/call/edit/{id}','CallController@edit')->middleware('auth');

Route::post('/call/update/{id}','CallController@update')->name('call/update')->middleware('auth');

Route::get('/call/delete/{id}','CallController@delete')->middleware('auth');