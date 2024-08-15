<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
 Route::get('/','HomeController@index');
 Route::get('/checktype', 'HomeController@checktype')->name('checktype');

//Route::get('/seatreservation' ,'VehicleController@index')->name('seat');
//Route::post('/addseatreservation' ,'VehicleController@store')->name('storereservation');
//Route::post('/store' ,'VehicleController@show');
// Route::get('/seat', function () {
//     return view('Re');
// });


//Route::get('/list' ,'VehicleController@show')->name('list');
//
//Route::get('/checktype' ,'VehicleController@store')->name('Re');


Auth::routes();

###############################  Begin Passenger Routes ###################################

Route::group(['namespace' => 'Passenger'], function () {
    Route::get('/home', 'PassengerController@dashboard')->name('passenger.dashboard');
    Route::get('/logout', 'loginController@logout')->name('passenger.logout');
    Route::get('/login', 'LoginController@login')->name('login');
   
    Route::get('/register', 'LoginController@getregister')->name('get.register');
    Route::post('/register', 'LoginController@register')->name('register');
    Route::post('/logout', 'LoginController@logout')->name('logout');

});

###############################  End Passenger Routes #####################################


###############################  Begin Admin Routes ###################################

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/logout', 'loginController@logout')->name('admin.logout');
    Route::get('/login', 'LoginController@getlogin')->name('admin.get.login');
    Route::post('/login', 'LoginController@login')->name('admin.login');
    Route::get('/register', 'LoginController@getregister')->name('admin.get.register');
    Route::post('/register', 'LoginController@register')->name('admin.register');
});

###############################  End Admin Routes #####################################


###############################  Begin Driver Routes ######################################

Route::group(['prefix' => 'driver', 'namespace' => 'Driver'], function () {
    Route::get('/', 'DriverController@dashboard')->name('driver.dashboard');
    Route::get('/logout', 'loginController@logout')->name('driver.logout');
    Route::get('/login', 'LoginController@getlogin')->name('driver.get.login');
    Route::post('/login', 'LoginController@login')->name('driver.login');
    Route::get('/register', 'LoginController@getregister')->name('driver.get.register');
    Route::post('/register', 'LoginController@register')->name('driver.register');
    Route::get('/addvehicle','DriverController@showw')->name('driver.addvehicle');
    route::post('createvehicle','DriverController@create')->name('driver.createvehicle');
    Route::get('/show','DriverController@show')->name('driver.show');
    Route::post('/showpass','DriverController@show2')->name('driver.showpass');
      Route::post('/logout', 'DriverController@logout')->name('driver.logout');

});

############################### seat_Reservation ####################################


Route::get('/gotoseat','Vehicle\VehicleController@index')->name('gotoseat_reservation');
Route::post('/seat','Vehicle\VehicleController@store')->name('seat_reservation');



