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
    return view('/login_siswa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/student', 'StudentController');

Route::resource('/spp', 'SppController');

Route::resource('/grade', 'GradeController');

Route::resource('/payment', 'PaymentController');
Route::get('/employe', 'PaymentController@employe');
Route::get('/print', 'PaymentController@cetak');


Route::resource('/petugas', 'PetugasController');

Route::group(['prefix' => 'admin', 'middleware' => ['admin','auth']], function(){
    Route::resource('/', 'AdminController');
});


Route::get('/login_siswa', 'AuthController@getLogin');
Route::post('/halaman_siswa', 'AuthController@postLogin');
Route::get('/halaman_siswa', 'AuthController@index');
Route::get('/cetak', 'AuthController@cetak');



