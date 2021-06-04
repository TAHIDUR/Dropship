<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'DashboardController@index')->name('backend.dashboard.index');
Route::get('/api', 'Products@getPromotionLinks')->name('backend.api.promotion.link');
Route::get('/config', 'Products@aliconfig')->name('backend.api.config');


