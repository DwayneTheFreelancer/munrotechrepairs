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

Route::get('/', 'PagesController@index');
Route::get('/about-us', 'PagesController@aboutUs');
//EMAIL
Route::post('/send', 'PagesController@send');
Route::get('/contact', 'PagesController@contact');
Route::get('/story', 'PagesController@story');
Route::get('/blog', 'PagesController@blog');
Route::get('/faq', 'PagesController@faq');

// REPAIRS

Route::get('repairs/', 'RepairsController@index');
Route::get('repairs/create', 'RepairsController@create');
Route::post('/repairs', 'RepairsController@store');
Route::get('repairs/{id}', 'RepairsController@show');

Auth::routes();

//Route::get('/home', 'HomeController@index');
//Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::post('/login/custom', [
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', function() {
        return view('home');
    })->name('home');
    Route::post('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
});

