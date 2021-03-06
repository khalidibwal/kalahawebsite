<?php

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

Route::get('/', function () {
    return view('component.logo');
});
// view
Route::get('/fnb', 'fnbController@view');
Route::get('/wharf', 'wharfController@view');
Route::get('/Denofkalaha', 'denController@view');
Route::get('/thepierbykalaha', 'pierController@view');
Route::get('/kalatham', 'kalathamController@view');
Route::get('/aboutkalatham', 'kalathamController@about');
Route::get('/gallerykalatham', 'kalathamController@gallery');
Route::get('/contactuskalatham', 'kalathamController@contact');

// Store contact
Route::post('/fnb/store','fnbController@store');
Route::post('/wharf/store','wharfController@store');
Route::post('/Denofkalaha/store','denController@store');
Route::post('/thepierbykalaha/store','pierController@store');
Route::post('/contactuskalatham/store','kalathamController@store')->name('kala.store');

//Send Reservation
Route::post('/wharf/reservation','wharfController@reservation');
Route::post('/Denofkalaha/reservation','denController@reservation');
Route::post('/thepierbykalaha/reservation','pierController@reservation');


