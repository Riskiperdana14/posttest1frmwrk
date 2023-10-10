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

Route::get('/', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/series', function () {
    return view('series');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/submit_guest', 'App\Http\Controllers\GuestController@store');

Route::post('/submit_comment', 'App\Http\Controllers\CommentController@store');
