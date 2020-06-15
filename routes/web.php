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

Route::get('/design/menu', 'ReceiptDesignController@menu')->name('receiptdesign.menu');

Route::get('/setting/edit', 'SettingController@edit')->name('setting.edit');

Routr::put('/setting/update', 'SettingController@update')->name('setting.update');
