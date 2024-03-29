<?php

use Illuminate\Support\Facades\Route;
use App\HomeController;
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
    return view('pages.home');
});

Route::get('detail', function() {
    return view('pages.detail');
});

Route::get('/', 'HomeController@home') -> name('home');

Route::get('detail', 'HomeController@detail');