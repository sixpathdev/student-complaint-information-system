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
    return view('welcome');
});

// Route::get('complain')

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    //All the admin routes will be defined here...
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/adminreg', 'RegisterController@showRegForm');

    Route::namespace('Auth')->group(function () {

        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::get('/register', 'RegisterController@showRegForm')->name('register');

        Route::post('/login', 'LoginController@login');
        Route::post('/register', 'RegisterController@register');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/complaints', 'ComplaintController@index');
Route::get('/complaints/create', 'ComplaintController@create')->name('complaint');
Route::get('/complaints/{complaint}', 'ComplaintController@show');
Route::post('/complaints', 'ComplaintController@store');
Route::get('/complaints/{complaint}/edit', 'ComplaintController@edit');
Route::patch('/complaints/{complaint}', 'ComplaintController@update');
Route::delete('/complaints/{complaint}', 'ComplaintController@delete');
//edit
//update
//destroy

