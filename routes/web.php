<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
 */
Route::get('/admin/panel','Back\Dashboard@index')->name('admin.dashboard');
Route::get('/admin/giris','Back\Auth@login')->name('admin.login');/*auth işlemeri için yeni controller oluşturuldu*/




/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
 */

/* Sabit verilen URL ler başta tanımlanmalı */
Route::get('/','Front\Homepage@index')->name('homepage'); /* definition for links */
Route::get('sayfa','Front\Homepage@index');
Route::get('/iletisim','Front\Homepage@contact')->name('contact'); 
Route::post('/iletisim','Front\Homepage@contactPost')->name('contact.post');

Route::get('/kategori/{category}','front\homepage@category')->name('category');
Route::get('/{category}/{slug}','front\homepage@single')->name('single');
Route::get('{sayfa}','Front\Homepage@page')->name('page');
