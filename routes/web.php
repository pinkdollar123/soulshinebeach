<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UniqueController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users', [UserController::class, 'index']);

// Route::resource('/students', StudentsController::class);


Route::group(['namespace'=>'App\Http\Controllers'], function(){
    // Home Routes '/' calls the index view for homepage
    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/gallery', 'PagesController@gallery')->name('pages.gallery');
    Route::get('/daytour', 'PagesController@daytour')->name('pages.daytour');
    Route::get('/contactus', 'PagesController@contactus')->name('pages.contactus');
    Route::get('/accommodations', 'PagesController@accommodations')->name('pages.accommodations');
        Route::group(['middleware' => ['guest']],function(){
            // Login Routes
            Route::get('/login', 'LoginController@show')->name('login');
            // Login Post
            Route::post('/login', 'LoginController@authLogin')->name('login.perform');
            // Register routing
            Route::get('/register', 'RegisterController@show')->name('register');
            //Routes for posting the data after registration
            Route::post('/register', 'RegisterController@register')->name('register.perform');
        });
    //Grouped controller by calling the namespace above which is App\Http\Controller
    // Nested Group
    Route::group(['middleware' => ['auth']], function(){
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/reservation', 'ReservationController@create')->name('reservation.create')->middleware('auth.check');
        Route::post('/reservations', 'ReservationController@store')->name('reservations.store');
        Route::get('/reserved', 'ReservationController@show')->name('reserved.show');
        // Route::get('/reservations/{reservation_id}/edit', 'ReservationController@edit')->name('reservations.edit');
        // Route::post('/reservations/{reservation_id}/update', 'ReservationController@update')->name('reservations.update');
        // Route::delete('/reservations/{reservation_id}/destroy', 'ReservationController@destroy')->name('reservations.destroy');
        // Route::get('/guestlist', 'UniqueController@guests')->name('guestlist.guests');
        // Route::get('/beachhouse', 'UniqueController@beachouse')->name('beachhouse.beachouse');
        // Route::get('/admin-reservations', 'UniqueController@reservations')->name('admin-reservations.reservations');
        // Route::get('/admin-create', 'UniqueController@create')->name('admin-create.create');
        // Route::post('/beachhouse', 'UniqueController@storeBeach')->name('beachhouse.storeBeach');
    });

    Route::group(['middleware' => ['auth','unique']], function(){
    Route::get('/reservations/{reservation_id}/edit', 'ReservationController@edit')->name('reservations.edit');
    Route::post('/reservations/{reservation_id}/update', 'ReservationController@update')->name('reservations.update');
    Route::delete('/reservations/{reservation_id}/destroy', 'ReservationController@destroy')->name('reservations.destroy');
    Route::get('/guestlist', 'UniqueController@guests')->name('guestlist.guests');
    Route::get('/beachhouse', 'UniqueController@beachouse')->name('beachhouse.beachouse');
    Route::get('/admin-reservations', 'UniqueController@reservations')->name('admin-reservations.reservations');
    Route::get('/admin-create', 'UniqueController@create')->name('admin-create.create');
    Route::post('/beachhouse', 'UniqueController@storeBeach')->name('beachhouse.storeBeach');
    });
});

