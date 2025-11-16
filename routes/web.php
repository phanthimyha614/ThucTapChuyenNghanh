<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
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
?>