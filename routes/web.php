<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DetailsController;
use App\Http\Controllers\Frontend\SearchController;
use App\Models\Admin;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/details', [DetailsController::class, 'index'])->name('details');
Route::get('/search', [SearchController::class, 'index'])->name('search');


Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
Route::get('/dashboard/view-blog', [AdminController::class, 'viewBlog'])->name('view-blog');
Route::get('/dashboard/add-img', [AdminController::class, 'addImage'])->name('add-img');
Route::post('/dashboard/store-img', [AdminController::class, 'store'])->name('store-img');
Route::get('/dashboard/blog-delete{id}', [AdminController::class, 'destroy'])->name('blog-delete');
Route::get('/dashboard/blog-edit{id}', [AdminController::class, 'edit'])->name('blog-edit');
Route::post('/dashboard/blog-update{id}', [AdminController::class, 'update'])->name('blog-update');
