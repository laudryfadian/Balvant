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
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('/dashboard', 'MakananController@index')->name('makanan');
Route::get('/dashboard/create', 'MakananController@create')->name('makanan.create');
Route::post('/dashboard', 'MakananController@store')->name('makanan.store');
Route::get('/dashboard/edit/{id}', 'MakananController@edit')->name('makanan.edit');
Route::post('/dashboard/update/{id}', 'MakananController@update')->name('makanan.update');
Route::post('/dashboard/delete/{id}', 'MakananController@destroy')->name('makanan.destroy');

Route::get('/exportMakanan', 'MakananController@exportMakanan')->name('excel');

Route::get('/pdfMakanan', 'MakananController@pdfMakanan')->name('cetakPdfMakanan');

Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user', 'UserController@store')->name('user.store');
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/update/{id}', 'UserController@update')->name('user.update');
Route::post('/user/delete/{id}', 'UserController@destroy')->name('user.destroy');
Route::get('/exportUser', 'UserController@exportUser')->name('excelUser');
Route::get('/pdfUser', 'UserController@pdfUser')->name('cetakPdfUser');

Route::get('/usertrx', 'UserTrxController@index')->name('usertrx');
Route::get('/usertrx/edit/{id}', 'UserTrxController@edit')->name('usertrx.edit');
Route::post('/usertrx/update/{id}', 'UserTrxController@update')->name('usertrx.update');
Route::post('/usertrx/delete/{id}', 'UserTrxController@destroy')->name('usertrx.destroy');
Route::get('/exportUsertrx', 'UserTrxController@exportTrx')->name('excelUsertrx');
Route::get('/pdfUsertrx', 'UserTrxController@pdfUsertrx')->name('cetakPdfUsertrx');
