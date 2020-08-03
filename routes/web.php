<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomePageController@show')->name('FE_HOME_PAGE_SHOW');
    Route::post('/lead', 'LeadController@store')->name('FE_LEAD_STORE');
    Route::get('/thank-you', 'ConfirmationPageController@show')->name('FE_CONFIRMATION_PAGE_SHOW');
    Route::get('/ccpa', 'CcpaPageController@show')->name('CCPA_PAGE_SHOW');
    Route::post('/ccpa-contact', 'CcpaLeadController@store')->name('FE_CCPA_LEAD_STORE');
    Route::get('/ccpa-confirmation', 'CcpaConfirmationPageController@show')->name('CCPA_CONFIRMATION_PAGE_SHOW');
});

Route::group(['namespace' => 'Backend\Auth', 'prefix' => config('app.backend_route_prefix')], function () {
    Route::get('/login', 'LoginController@show')->name('BE_LOGIN_FORM');
    Route::post('/login', 'LoginController@authenticate')->name('BE_LOGIN');
    Route::any('/logout', 'LoginController@logout')->name('BE_LOGOUT');
});

Route::group(['namespace' => 'Backend', 'prefix' => config('app.backend_route_prefix')], function () {
    Route::get('/admin/dashboard', 'DashboardController@show')->name('BE_DASHBOARD_SHOW');
    Route::get('/leads', 'LeadsController@index')->name('BE_LEADS_INDEX');
    Route::post('/leads', 'LeadsController@index')->name('BE_LEADS_QUERY_INDEX');
    Route::any('/export-leads', 'LeadsExportController@index')->name('BE_LEADS_EXPORT_INDEX');
});