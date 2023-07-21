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

$this->controller_path = 'App\Http\Controllers';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Main Page Route
    Route::get('/', $this->controller_path . '\pages\HomePage@index')->name('pages-home');

    // Organizations
    Route::get('/clients', $this->controller_path . '\clients\ClientController@index')->name('clients');

    /*Route::get('/page-2', $this->controller_path . '\pages\Page2@index')->name('pages-page-2');

// pages
Route::get('/pages/misc-error', $this->controller_path . '\pages\MiscError@index')->name('pages-misc-error');

// authentication
Route::get('/auth/login-basic', $this->controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $this->controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');*/
});

// locale
Route::get('lang/{locale}', 'App\Http\Controllers\language\LanguageController@swap');


