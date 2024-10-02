<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return "Profil pengguna dengan ID: " . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return "Daftar pengguna";
    });
    Route::get('/posts', function () {
        return "Daftar post";
    });
});