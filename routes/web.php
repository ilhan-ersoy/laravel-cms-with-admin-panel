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
/* Sabit verilen URL ler başta tanımlanmalı */
Route::get('/','Front\Homepage@index')->name('homepage'); /* definition for links */
Route::get('sayfa','Front\Homepage@index');
Route::get('/iletisim','Front\Homepage@contact')->name('contact'); 

Route::get('/kategori/{category}','front\homepage@category')->name('category');
Route::get('/{category}/{slug}','front\homepage@single')->name('single');
Route::get('{sayfa}','Front\Homepage@page')->name('page');
