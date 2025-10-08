<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () { 
    return view('dashboard');
});

Route::get('/user/{nama}', function ($nama) { 
    return "Halo, $nama!"; 
});

Route::get('/produk/{id?}', function ($id = null) { 
    return $id ? "Produk ID: $id" : "Tidak ada ID produk"; 
});

Route::get('/kategori/{nama}', function ($nama) { 
    return "Kategori: $nama"; 
})->where('nama', '[A-Za-z]+'); 

Route::get('/profil', function () { 
    return 'Ini halaman profil'; 
})->name('profil'); 
Route::get('/link-profil', function () { 
    return route('profil'); 
});