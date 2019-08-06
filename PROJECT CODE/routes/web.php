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

Route::resource('cart', 'CartController');

Route::get('/checkout','CartController@checkout')->name('cart.checkout');

Route::get('/cart','CartController@index')->name('cart.index');

Route::get('/agentsimulator','Agent@index')->name('agentsimulator.index');

Route::post('/agentsimulator','Agent@paid')->name('agentsimulator.paid');



Route::post('/order/checkingpayment','OrderController@check_pay')->name('order.check_pay');


Route::view('/order/waiting', 'order.waiting')->name('order.waiting');



Route::get('/admin/medicines','MedicineController@adminIndex')->name('admin.medicines');


Route::get('/admin/doctors','DoctorController@adminIndex')->name('admin.doctors');


Route::get('/admin', function() {
    return view('admin.index');
});




    