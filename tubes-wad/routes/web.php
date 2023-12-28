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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/counsoler', function () {
    return view('counsoler');
})->name('counsoler');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');