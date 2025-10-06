<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
})->name('login.show');

// Rute untuk halaman program
Route::get('/program', function () {
    return view('program');
});

// Rute untuk halaman tentang
Route::get('/tentang', function () {
    return view('tentang');
});

// Anda bisa jadikan halaman program sebagai halaman utama
Route::get('/', function () {
    return view('program');
});

Route::post('/login', function() {
    // Untuk sementara, kita hanya tampilkan pesan.
    // Logika login sebenarnya akan ditulis di sini nanti.
    return 'Sedang memproses login...';
})->name('login');