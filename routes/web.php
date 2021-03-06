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
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('downloadresume', 'HomeController@getDownloadResume')->name('home.download');
Route::get('portfolio/detail/{id}', 'PortfolioController@detail')->name('portfolio.detail');
Route::get('finpay/success', 'FinpayController@success')->name('finpay.success');
Route::get('finpay/failed', 'FinpayController@failed')->name('finpay.failed');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard.index');
    
    // Brand -> Portfolio
    Route::get('admin/portfolio', 'PortfolioController@adminList')->name('portfolio.admin.list');
    Route::get('admin/portfolio/edit/{id}', 'PortfolioController@adminEdit')->name('portfolio.admin.edit');
});