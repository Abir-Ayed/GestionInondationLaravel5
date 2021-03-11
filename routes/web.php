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
});*/


Route::get('/', function () {
    $user = \App\User::get();
   Notification::send($user , new \App\Notifications\LachersBarrageNotification());
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stat', 'HomeController@statistique');

Route::get('logout', 'Auth\LoginController@logout');
Route::get('/forgot_password', 'ForgotPasswordController@forgot');
Route::post('/forgot_password', 'ForgotPasswordController@password');
Route::get('/reset_password/{email}/{code}', 'ForgotPasswordController@reset');
Route::post('/reset_password/{email}/{code}', 'ForgotPasswordController@resetPassword');



Route::get('/moris', 'HomeController@affiche')->name('moris');
Route::get('charts','ChartController@index')->name('charts');
//Route::get('/home','HomeController@stat');

Route::resource('citoyen','CitoyensController');
Route::resource('observation','ObservationController');
Route::resource('profile','UsersController');


//Route::get('comptes',"CitoyensController@index")->name('comptes');
//Route::post('comptes',[ 'uses'=>"CitoyensController@add",'as'=>'comptes_add']);



Route::resource('barrage','BarrageController');
Route::resource('conseils','ConseilController');

Route::resource('notifications','NotificationController');
Route::resource('ListCitoyensNotifie','ListNotifieController');





