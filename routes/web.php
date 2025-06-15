<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/profil', 'profil');
Route::view('/berita', 'berita');
Route::view('/galeri', 'galeri');

