<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomePageController@show')->name('FE_HOME_PAGE_SHOW');
});