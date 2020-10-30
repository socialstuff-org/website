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

Route::get('/features', function () {
  return view('features');
});

Route::get('/team', function () {
  return view('team');
});

Route::get('/faq', function () {
  return view('faq');
});

Route::get('/imprint', function () {
  return view('imprint');
});

Route::get('/downloads', function () {
  return view('downloads');
});


