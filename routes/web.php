<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/header', [HeaderController::class, 'index'])->name('admin.header.index');
Route::post('/admin/header', [HeaderController::class, 'store'])->name('admin.header.store');

Route::resource('/admin/tentang', AboutController::class)
     ->names('tentang') // Memberi nama kustom pada rute
     ->parameters(['tentang' => 'about']);

Route::resource('program', ProgramController::class);
