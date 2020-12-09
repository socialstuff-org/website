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

  Route::get('/imprint', function () {
    return view('imprint');
  });

  Route::get('/faq', function () {
    return view('faq');
  });

  Route::get('/downloads', function () {
    return view('downloads');
  });

  Route::get('/donate', function () {
    return view('donate');
  });

  Route::get('/careers', function () {
    return view('careers');
  });

  Route::get('/terms', function () {
    return view('terms');
  });

  Route::get('/support', function () {
    return view('support');
  });

  Route::get('/blog', function () {
    return view('blog');
  });
