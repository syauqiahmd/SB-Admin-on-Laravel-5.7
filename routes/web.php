<?php
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('template.dashboard');

// dashboard
Route::view('/template/dashboard', 'template.dashboard');
// auth pages
Route::view('/template/login', 'template.authLogin');
Route::view('/template/register', 'template.authRegister');
Route::view('/template/forget', 'template.authForgetPassword');
// component
Route::view('/template/button', 'template.button');
Route::view('/template/card', 'template.card');
Route::view('/template/form', 'template.form');
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
