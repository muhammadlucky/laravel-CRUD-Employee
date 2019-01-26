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

Route::get('/lama', function () {
    return "kenapa kok lama";
});

Route::get('/rumah', function () {
    return "disini rumah";
});

Route::get('/pohong', function () {
    return view ('telo');
});

//pakai kontroller
Route::get('/terong', 'CapungController@index');

Route::get('/brokoli', 'CapungController@pujangga');

Route::get('/brokoli/dewa', 'CapungController@siti');

Route::resource ('Karyawan', 'KaryawanController');

Route::resource ('Product', 'ProductController');

Route::resource ('Supplier', 'SupplierController');

Route::resource ('Customer','CustomerController');

Route::resource ('Employee','EmployeeController');

Route::get('/Home','HomeController@index');