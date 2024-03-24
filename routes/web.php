<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('home', [HomeController::class, 'index'])->name('mahasiswa.home');
Route::get('create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::patch('update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
