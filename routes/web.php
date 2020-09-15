<?php
use App\Data;
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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');    

Route::prefix('customer')->group(function(){
    Route::get('/login','Auth\customerloginController@showLoginForm')->name('customer.login');
    Route::post('/login','Auth\customerloginController@login')->name('customer.login.submit');
    //Route::get('/','customer@index')->name('custome.dashboard');
    
});



Route::get('/testhome', 'HomeController@test')->name('testhome');

Route::get('/test', 'CrudsController@index')->name('test');
Route::get('/exteas_view/{id}', 'CrudsController@show')->name('exteas_viwe');
Route::get('exteas_delete/{id}', 'CrudsController@destroy')->name('exteas_delete');  
Route::get('/exteas_insert', function () {
    return view('exteas_insert');
})->name('exteas_insert');
Route::post('submit', 'CrudsController@store'); 

Route::get('/exteas_editt/{id}', 'CrudsController@edit')->name('exteas_edit');
Route::post('submiteditexteas/{id}','CrudsController@update')->name('submiteditexteas');

Route::resource('Cruds','CrudsController');



Route::get('/customers', 'customersController@index')->name('customers');
Route::get('/customer_view/{id}', 'customersController@show')->name('customer_view');
Route::get('/customer_delete/{id}', 'customersController@destroy')->name('customer_delete');
Route::get('/customer_insert', function () {
    return view('customer_insert');
})->name('customer_insert');
Route::post('submitcustomer', 'customersController@store'); 
Route::resource('customer','customersController');




Route::get('/rooms', 'roomController@index')->name('rooms');
Route::get('/room_view/{id}', 'roomController@show')->name('room_view');
Route::get('/room_delete/{id}', 'roomController@destroy')->name('room_delete');
Route::get('/room_insert', function () {
    return view('room_insert');
})->name('room_insert');
Route::post('submitroom', 'roomController@store');
Route::resource('room','roomController');



Route::get('/room_types', 'roomtypeController@index')->name('room_types');
Route::get('/roomtypes_view/{id}', 'roomtypeController@show')->name('roomtypes_view');
Route::get('/roomtype_delete/{id}', 'roomtypeController@destroy')->name('roomtype_delete');
Route::get('/roomtype_insert', function () {
    return view('roomtype_insert');
})->name('roomtype_insert');
Route::post('submitroomtype', 'roomtypeController@store');
Route::resource('roomtype','roomtypeController');


Route::get('/bookings', 'bookingController@index')->name('bookings');
Route::get('/booking_view/{id}', 'bookingController@show')->name('booking_view');
Route::get('/booking_delete/{id}', 'bookingController@destroy')->name('booking_delete');
Route::resource('bookings', 'bookingController');



Route::get('about', 'TestController@about')->name('about');



