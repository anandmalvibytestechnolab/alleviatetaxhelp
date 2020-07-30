<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomePageController@show')->name('FE_HOME_PAGE_SHOW');
    Route::post('/lead', 'LeadController@store')->name('FE_LEAD_STORE');
    Route::get('/thank-you', 'ConfirmationPageController@show')->name('FE_CONFIRMATION_PAGE_SHOW');
    Route::get('/ccpa', 'CcpaPageController@show')->name('CCPA_PAGE_SHOW');
});