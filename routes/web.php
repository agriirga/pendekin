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

Route::get('/laravel-welcome', function () {
    return view('welcome');
});

Route::get('/start_bootstrap', function () {
    return view('sb');
});

Route::get('/', function () {
    $shortlink_count = 1000;
    $visitor_count = 509;

    return view('landing',compact('shortlink_count','visitor_count'));
});
