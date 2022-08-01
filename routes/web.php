<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'aboutPage']);

Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'formCreate']);
Route::post('/product/create', [App\Http\Controllers\ProductController::class, 'saveData']);

Route::delete('/product/{id}/delete', [App\Http\Controllers\ProductController::class, 'deleteData']); 
Route::post('/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'editData']); 
Route::get('/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'formEdit']); 



// Route Mahasiswa
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'formCreate']);
Route::post('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'saveData']);

Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'formEdit']); 
Route::post('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'editData']);
Route::delete('/mahasiswa/{id}/delete', [App\Http\Controllers\MahasiswaController::class, 'deleteData']); 

// Route::get('/product/create', function () {
    //     return "Disini Katalog";
    // });
    