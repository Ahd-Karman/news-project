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




/*
|********  View Interfaces *********|
*/
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/sports', function () {
    return view('sports');
})->name('sports');

Route::get('/politics', function () {
    return view('politics');
})->name('politics');

Route::get('/tech', function () {
    return view('tech');
})->name('tech');

Route::get('/economy', function () {
    return view('economy');
})->name('economy');

Route::get('/cultures', function () {
    return view('cultures');
})->name('cultures');

Route::get('/health', function () {
    return view('health');
})->name('health');

Route::get('/trend', function () {
    return view('trend');
})->name('trend');

Route::get('/community', function () {
    return view('community');
})->name('community');


/*
|********  Login  *********|
*/
Route::get('/login', function () {
    return view('login');
})->name('login');
