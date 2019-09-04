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


Route::get('test', function () {
    return view('test');
});
Auth::routes();

/*****************************FrontOffice*********************************/

/*****************************Les hotels*********************************/
Route::get('hotels/','HotelController@index')->name('hotels.list');
Route::get('hotels/detail/{id}','HotelController@show')->name('hotels.detail');

/*****************************Les Restaurents*********************************/
Route::get('restaurents/','RestaurentController@index')->name('restaurents.list');
Route::get('restaurents/detail/{id}','RestaurentController@show')->name('restaurents.detail');


/*****************************Les Offres*********************************/
Route::get('offres/','OffreController@index')->name('offres.list');
Route::get('offres/detail/{id}','OffreController@show')->name('offres.detail');


/*****************************Espace Client*********************************/
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/reservation/{id}', 'ReservationController@create')->name('reservations.create');
    Route::post('/reservation/store','ReservationController@store')->name('reservations.store');

    Route::get('/reservation','UserReservationController@index')->name('user.reservations');
    Route::get('/reservation/show/{id}','ReservationController@show')->name('user.reservations.show');
    Route::get('/reservation/delete/{id}','UserReservationController@destroy')->name('user.reservations.delete');
    Route::get('/reservations-restau','UserReservationRestaurentController@store')->name('user.reservations-restau');
    Route::get('/profile','UserController@index')->name('user.profile');


    });



/*****************************BackOffice*********************************/
Route::get('/','AdminController@index')->name('index');

Route::prefix('admin')->group(function () {

Route::get('register', 'AdminController@create')->name('admin.register');
Route::post('register', 'AdminController@store')->name('admin.register.store');
Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');

Route::group(['middleware' => ['web','auth:admin']], function () {

Route::get('/','AdminController@index')->name('admin.index');

/*************************Offres***************************************/
Route::get('/offres','AdminOffreController@index')->name('admin.offres');
Route::get('/offres/edit/{id}','AdminOffreController@edit')->name('admin.offres.edit');
Route::post('/offres/update/{id}','AdminOffreController@update')->name('admin.offres.update');
Route::get('/offres/create','AdminOffreController@create')->name('admin.offres.create');
Route::post('/offres/store','AdminOffreController@store')->name('admin.offres.store');
Route::get('/offres/delete/{id}','AdminOffreController@destroy')->name('admin.offres.delete');


/*************************Hotels***************************************/
Route::get('/hotels','AdminHotelController@index')->name('admin.hotels');
Route::get('/hotels/edit/{id}','AdminHotelController@edit')->name('admin.hotels.edit');
Route::post('/hotels/update/{id}','AdminHotelController@update')->name('admin.hotels.update');
Route::get('/hotels/create','AdminHotelController@create')->name('admin.hotels.create');
Route::post('/hotels/store','AdminHotelController@store')->name('admin.hotels.store');
Route::get('/hotels/delete/{id}','AdminHotelController@destroy')->name('admin.hotels.delete');


/*************************Restaurents***************************************/
Route::get('/restaurents','AdminRestaurentController@index')->name('admin.restaurents');
Route::get('/restaurents/edit/{id}','AdminRestaurentController@edit')->name('admin.restaurents.edit');
Route::post('/restaurents/update/{id}','AdminRestaurentController@update')->name('admin.restaurents.update');
Route::get('/restaurents/create','AdminRestaurentController@create')->name('admin.restaurents.create');
Route::post('/restaurents/store','AdminRestaurentController@store')->name('admin.restaurents.store');
Route::get('/restaurents/delete/{id}','AdminRestaurentController@destroy')->name('admin.restaurents.delete');


/*************************Reservation Restaurent***************************************/
Route::get('/reservations-restau','AdminReservationRestaurentController@index')->name('admin.reservations-restau');
Route::get('/reservations-restau/edit/{id}','AdminReservationRestaurentController@edit')->name('admin.reservations-restau.edit');
Route::post('/reservations-restau/update/{id}','AdminReservationRestaurentController@update')->name('admin.reservations-restau.update');
Route::get('/reservations-restau/create','AdminReservationRestaurentController@create')->name('admin.reservations-restau.create');
Route::post('/reservations-restau/store','AdminReservationRestaurentController@store')->name('admin.reservations-restau.store');
Route::get('/reservations-restau/delete/{id}','AdminReservationRestaurentController@destroy')->name('admin.reservations-restau.delete');


/*************************Reservations***************************************/
Route::get('/reservations','AdminReservationController@index')->name('admin.reservations');
Route::get('/reservations/edit/{id}','AdminReservationController@edit')->name('admin.reservations.edit');
Route::post('/reservations/update/{id}','AdminReservationController@update')->name('admin.reservations.update');
Route::get('/reservations/create','AdminReservationController@create')->name('admin.reservations.create');
Route::post('/reservations/store','AdminReservationController@store')->name('admin.reservations.store');
Route::get('/reservations/delete/{id}','AdminReservationController@destroy')->name('admin.reservations.delete');
Route::get('/reservations/show/{id}','AdminReservationController@show')->name('admin.reservations.detail');



/*************************Users***************************************/
Route::get('/users','AdminUserController@index')->name('admin.users');
Route::get('/users/edit/{id}','AdminUserController@edit')->name('admin.users.edit');
Route::post('/users/update/{id}','AdminUserController@update')->name('admin.users.update');
Route::get('/users/create','AdminUserController@create')->name('admin.users.create');
Route::post('/users/store','AdminUserController@store')->name('admin.users.store');
Route::get('/users/delete/{id}','AdminUserController@destroy')->name('admin.users.delete');
});
});
