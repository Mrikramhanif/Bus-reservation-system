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
/*Front pages*/
Route::get('front','PagesController@home');
Route::get('about','PagesController@about');
Route::get('service','PagesController@service');
Route::get('blog','PagesController@blog');
Route::get('contact','PagesController@contact');

//Route::post('search','PagesController@search')->name('search');
Route::post('bookfirst','PagesController@bookfirst')->name('bookfirst');
Route::get('booksecond','PagesController@booksecond')->name('booksecond');
Route::get('bookthird','PagesController@bookthird')->name('bookthird');
Route::post('passenger','BookingController@passenger')->name('passenger.passenger');

 /*Front Pages*/

/*  Route::get('loginuser','PassengerController@login');
  Route::get('registeruser','PassengerController@register');
  Route::post('frontpages/regiester','PassengerController')->name('frontpages/regiester.registerpassenger');
  Route::post('frontpages/login','PassengerController')->name('frontpages/regiester.loginpassenger');*/

/*
 Passenger Routes
*/
   Route::get('registeruser','PassengerRegisterController@showreagister')->name('register');
   Route::post('registeruser','PassengerRegisterController@register')->name('registeruser.register');

   Route::get('loginuser','PassengerRegisterController@showlogin');
   Route::post('loginuser','PassengerRegisterController@login')->name('loginuser.login');

/*End Passenger 


 /*Backend Work*/
     Route::get('bookings','bookingController@index')->name('bookings.index');
     Route::get('bookings/create/{schedule?}','BookingController@create')->name('bookings.create');
     Route::post('/bookings/{schedule?}','BookingController@store')->name('bookings.store');
     Route::get('booking/{booking}/show/{schedule?}','BookingController@show')->name('bookings.show');
    Route::get('bookings/{booking}/edit/{schedule?}','BookingController@edit')->name('bookings.edit');
    Route::put('bookings/{booking}/{schedule?}','BookingController@update')->name('bookings.update');
    Route::delete('/bookings{booking}/{schedule?}','BookingController@destroy')->name('bookings.destroy');

    Route::resource('buses','BusController');

    Route::get('/schedules','ScheduleController@index')->name('schedules.index');
    Route::get('schedules/create/{bus?}','ScheduleController@create')->name('schedules.create');
    Route::post('/schedules/{bus?}','ScheduleController@store')->name('schedules.store');
    Route::get('schedules/{schedules}/show/{bus?}','ScheduleController@show')->name('schedules.show');
    Route::get('schedules/{schedules}/edit/{bus?}','ScheduleController@edit')->name('schedules.edit');
    Route::put('schedules/{schedules}/{bus?}' ,'ScheduleController@update')->name('schedules.update');
    Route::delete('/schedules/{schedules}/{bus?}', 'ScheduleController@destroy')->name('schedules.destroy');



Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

