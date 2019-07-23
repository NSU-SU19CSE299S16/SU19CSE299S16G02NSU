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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('medicine', 'MedicineController');


Route::resource('appointment', 'AppointmentController');


Route::resource('doctor', 'DoctorController');


Route::resource('Order', 'OrderController');


Route::get('/admin/medicine','MedicineController@adminIndex')->name('admin.medicine');

Route::get('/doctor', function () {
        return view('admin.doctor');
});

Route::get('/admin', function() {
    return view('admin.index');
});

// Route::get('/','DoctorController@index');
// Route::get('/','DoctorController@about');
// Route::get('/','DoctorController@services');



    