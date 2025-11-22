<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\SanPhamController;
use App\Models\SanPham;



Route::get('/', function () {
    return view('admin.index'); // giao diện trang chủ
})->name('home');

Route::middleware('auth')->group(function () {
    Route::view('/admin', 'layout.home')->name('admin');// giao diện login
});


Route::get('logout',[HomeController::class,'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/shop-detail', function () {
    return view('shop-detail');
})->name('shop-detail');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/admin/category', function () {
    return view('admin/category/category-list');
})->name('category');
Route::get('/admin/product', function () {
    return view('admin/product/product-list');
})->name('product');
Route::get('/customer', function () {
    return view('customer');
})->name('customer');
Route::get('/test', function () {
    return view('test');
})->name('test');

Route::middleware('auth')->group(function () {
    Route::get('/admin/sanpham', [SanPhamController::class, 'index'])->name('sanpham');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
