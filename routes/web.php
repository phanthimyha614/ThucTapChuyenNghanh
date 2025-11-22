<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\SanPhamController;
use App\Http\Controllers\admin\CategoryController;
use App\Models\SanPham;

Route::view('/', 'admin.index')->name('home');
Route::view('/home', 'layout.home')->name('index');

Route::view('/shop', 'shop')->name('shop'); 
Route::view('/shop-detail', 'shop-detail')->name('shop-detail'); 
Route::view('/cart', 'cart')->name('cart'); Route::view('/checkout', 'checkout')->name('checkout'); 
Route::view('/testimonial', 'testimonial')->name('testimonial'); 
Route::view('/404', '404')->name('404'); Route::view('/contact', 'contact')->name('contact');
Route::view('/service', 'service')->name('service');
Route::view('/contact', 'contact')->name('contact');
Route::view('/customer', 'customer')->name('customer'); 
Route::view('/test', 'test')->name('test');
Route::view('/admin/category', 'admin/category/category-list')->name('category'); 
Route::view('/admin/product', 'admin/product/product-list')->name('product');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::view('/admin', 'admin')->name('admin');

    Route::get('/admin/sanpham', [SanPhamController::class, 'index'])->name('sanpham');
    
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
});


Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');