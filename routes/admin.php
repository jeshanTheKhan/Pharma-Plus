<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Dashboard', [AdminController::class, 'admin'])->name('home');


// Category
Route::get('/Admin-Add-Category', [CategoryController::class, 'index'])->name('add.category');
Route::get('/Admin-All-Category', [CategoryController::class, 'table'])->name('all.category');

require __DIR__.'/auth.php';
