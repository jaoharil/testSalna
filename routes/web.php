<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BrandaController;

Route::get('/', [BrandaController::class, 'index']);
Route::get('/filter-by-type/{id_type}', [BrandaController::class, 'filterByType'])->name('branda.filterByType');


// Otentikasi Routes
Auth::routes();

// Route Home
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route Barang (CRUD)
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('barang', BarangController::class);
    Route::resource('type', TypeController::class);
});
