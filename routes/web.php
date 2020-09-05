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

Route::get('sayfa','Front\Homepage@index');
Route::get('/','Front\Homepage@index')->name('homepage'); /* definition for links */
Route::get('/kategori/{category}','front\homepage@category')->name('category');
Route::get('/{category}/{slug}','front\homepage@single')->name('single');
