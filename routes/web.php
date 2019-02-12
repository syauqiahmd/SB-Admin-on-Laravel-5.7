<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/card', 'HomeController@index')->name('card');
// dashboard
Route::view('/template/dashboard', 'template.dashboard');
// component
Route::view('/template/button', 'template.button');
Route::view('/template/card', 'template.card');
// utility
Route::view('/template/color', 'template.utilityColor');
Route::view('/template/border', 'template.utilityBorder');
Route::view('/template/animation', 'template.utilityAnimation');
Route::view('/template/other', 'template.utilityOther');
// pages
Route::view('/template/blank', 'template.blank');
// dataTable
Route::view('/template/data', 'template.dataTable');
// chart.js
Route::view('/template/chart', 'template.chart');
