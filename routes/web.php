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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

//Route doctors
Route::name('doctors.')->group(function () {

    Route::get('/doctor', 'DoctorsController@create')->name('create');
    Route::post('/doctor', 'DoctorsController@store')->name('store');
    Route::get('/showdoctors', 'DoctorsController@index')->name('index');
    Route::get('/showdoctor/{id}', 'DoctorsController@show')->name('show');
    Route::get('/showdoctor/{id}/edit', 'DoctorsController@edit')->name('edit');
    //Route::post('/showdoctor/{id}/edit', 'DoctorsController@update')->name('update');
    Route::put('/showdoctor/{id}/edit', 'DoctorsController@update')->name('update');
    Route::delete('/showdoctor/{id}', 'DoctorsController@destroy')->name('destroy');
});
