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

Route::resource('hospital','HospitalController')->middleware(['auth','check.hospital']);
Route::resource('report','ReportController')->except(['index'])->middleware(['auth','check.user']);
Route::get('hospital/showreport/{id}','HospitalController@showreport')->name('showreport')->middleware(['auth','check.hospital']);
Route::group(['middleware' => ['auth','check.user']], function () {
    Route::get('home', 'HomeController@index')->name('home');
    // Route::get('viewone/$id','HomeController@show')->name('Your report');
   Route::post('hospital/givepermission','PermissionController@store')->name('givepermission.store');

});
