<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');

Route::post('login', [AuthController::class, 'login'])->name('login-in');

Route::get('admin', [ImageController::class, 'index'])->name('images.index');

Route::get('admin/images/create', [ImageController::class, 'create'])->name('images.create');

Route::post('admin/images', [ImageController::class, 'store'])->name('images.store');

Route::get('admin/images/{id}/edit', [ImageController::class, 'edit'])->name('images.edit');

Route::put('admin/images/{id}', [ImageController::class, 'update'])->name('images.update');

Route::delete('admin/images/{id}', [ImageController::class, 'destroy'])->name('images.destroy');

Route::get('api/images', [ImageController::class, 'getAllImages']);
