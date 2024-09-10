<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DetailsController;
use App\Http\Controllers\Frontend\SearchController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/details', [DetailsController::class, 'index'])->name('details');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/dashboard', [AdminController::class, 'show'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
