<?php

Route::get('/', function () {
    return view('public');
});

Route::get('/app', function () {
    return view('public');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', ['middleware' => 'throttle:20,1', 'uses' => 'Auth\LoginController@login']);
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
/* Route::auth(); */

/* Route::any('{all}', function() { */
/*     return redirect('/'); */
/* })->where('all', '(.*)');; */


