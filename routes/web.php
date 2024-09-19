<?php

use Illuminate\Support\Facades\Route;

//! Default route
Route::get('/', function () {
    return view('login');
});

// Semua User
Route::get('/about', function () {
    return view('about');
});



// Mahasiswa
Route::get('/dashboard-mhs', function () {
    return view('dashboard-mhs');
});

// Pembimbing Akademik

// Bagian Akademik
Route::get('/dashboard-ba', function () {
    return view('dashboard-ba');
});

Route::get('/buatusulan', function () {
    return view('buatusulan');
});

Route::get('/daftarusulan', function () {
    return view('daftarusulan');
});

Route::get('/aturgelombang', function () {
    return view('aturgelombang');
});



// Dekan
Route::get('/dashboard-dekan', function () {
    return view('dashboard-dekan');
});

Route::get('/usulanruang', function () {
    return view('usulanruang');
});

Route::get('/usulanjadwal', function () {
    return view('usulanjadwal');
});

// Kaprodi



//? Testing

Route::get('/test', function () {
    return view('tailwind');
});

Route::get('/test2', function () {
    return view('dashboard-gakepake');
});
