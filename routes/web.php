<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DetailsController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\CategoryContoller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Models\Admin;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/details', [DetailsController::class, 'index'])->name('details');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::middleware([AuthenticateMiddleware::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/dashboard/view-blog', [AdminController::class, 'viewBlog'])->name('view-blog');
    Route::get('/dashboard/add-img', [AdminController::class, 'addImage'])->name('add-img');
    Route::post('/dashboard/store-img', [AdminController::class, 'store'])->name('store-img');
    Route::get('/dashboard/blog-delete{id}', [AdminController::class, 'destroy'])->name('blog-delete');
    Route::get('/dashboard/blog-edit{id}', [AdminController::class, 'edit'])->name('blog-edit');
    Route::post('/dashboard/blog-update{id}', [AdminController::class, 'update'])->name('blog-update');


    Route::get('/dashboard/add/category', [CategoryContoller::class, 'create'])->name('add_category');
    Route::resource('category', CategoryContoller::class);
    Route::post('/dashboard/store-category', [CategoryContoller::class, 'store'])->name('store_category');
    Route::get('/dashboard/edit/category/{id}', [CategoryContoller::class, 'edit'])->name('edit_category');
    Route::post('/dashboard/edit/category/update/{id}', [CategoryContoller::class, 'update'])->name('update_category');
    Route::get('/dashboard//category/delete/{id}', [CategoryContoller::class, 'destroy'])->name('delete_category');


    Route::get('/dashboard/sub-category', [SubCategoryController::class, 'index'])->name('sub_category_list');
    Route::get('/dashboard/add/sub-category', [SubCategoryController::class, 'create'])->name('add_sub_category');
    Route::post('/dashboard/store-sub-category', [SubCategoryController::class, 'store'])->name('store_sub_category');
    Route::get('/dashboard/edit/sub-category/{id}', [SubCategoryController::class, 'edit'])->name('edit_sub_category');
    Route::post('/dashboard/edit/sub-category/update/{id}', [SubCategoryController::class, 'update'])->name('update_sub_category');
    Route::get('/dashboard/sub-category/delete/{id}', [SubCategoryController::class, 'destroy'])->name('delete_sub_category');



    Route::get('/dashboard/product', [ProductController::class, 'index'])->name('product_list');
    Route::get('/dashboard/add/product', [ProductController::class, 'create'])->name('add_product');
    Route::post('/dashboard/store/product', [ProductController::class, 'store'])->name('store_product');
    Route::get('category_wise_sub_category_ajax', [ProductController::class, 'catWiseSubCat']);
    Route::get('/dashboard/edit/product/{id}', [ProductController::class, 'edit'])->name('edit_product');
    Route::post('/dashboard/edit/product/update/{id}', [ProductController::class, 'update'])->name('update_product');
    Route::get('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name('delete_product');
    Route::get('sub_category_wise_product_ajax', [ProductController::class, 'subWiseProduct']);


    Route::get('/dashboard/product_report', [ProductController::class, 'product_report'])->name('product_report');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/user', [LoginController::class, 'registerUser'])->name('register_user');
Route::post('/login/user', [LoginController::class, 'loginUser'])->name('login_user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
