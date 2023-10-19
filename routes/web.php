<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/users/sign_in', "App\Http\Controllers\SessionController@get_sign_in");

Route::post('/users/sign_in', "App\Http\Controllers\SessionController@sign_in")->name("sign_in");

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', "App\Http\Controllers\HomeController@list_user")->name('home');
});
