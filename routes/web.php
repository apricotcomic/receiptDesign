<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/design/menu', 'MenuController@menu')->name('menu');

Route::resource('setting', 'SettingController');

Route::get('/print/{id}', 'ReceiptPrintController@print')->name('print');

Route::get('/upload', 'StampUploadController@index')->name('index');

Route::post('/upload', 'StampUploadController@upload')->name('upload');
