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

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', 'AdminController@index')->name('index');
        Route::get('/configurations', 'AdminController@configurations')->name('configurations');
    });
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/emprestimos/{type}', 'HomeController@lending')->name('lending');
Route::post('/emprestimos', 'HomeController@lendingPost')->name('lendingPost');
Route::get('/contato', 'HomeController@contact')->name('contact');
Route::get('/enviar', 'HomeController@send')->name('send');
