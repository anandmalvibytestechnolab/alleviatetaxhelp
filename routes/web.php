<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomePageController@show')->name('FE_HOME_PAGE_SHOW');