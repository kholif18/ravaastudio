<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [DashboardController::class, 'index']);

// Admin Page

Route::get('/admin/home', function () {
    return view('admin/home');
});

Route::get('/admin/product-list', function () {
    return view('admin/products/product-list');
});

Route::get('/admin/create-product', function () {
    return view('admin/products/create-product');
});

Route::get('/admin/category-list', function () {
    return view('admin/products/category-list');
});

Route::get('/admin/create-category', function () {
    return view('admin/products/create-category');
});

Route::get('/admin/setting', function () {
    return view('admin/setting');
});

Route::get('/admin/users', function () {
    return view('admin/users');
});

Route::get('/admin/edit-profile', function () {
    return view('admin/edit-profile');
});


// E-commerce Page

Route::get('/', function () {
    return view('dashboard/index');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/contact', function () {
    return view('contact/index');
});

Route::get('/banner', function () {
    return view('banner/index');
});

Route::get('/content-design', function () {
    return view('content-design/index');
});

Route::get('/sablon', function () {
    return view('sablon/index');
});

Route::get('/erba', function () {
    return view('undangan/erba');
});

Route::get('/falah', function () {
    return view('undangan/falah');
});

Route::get('/img-video', function () {
    return view('undangan/img-video');
});

Route::get('/kabinet', function () {
    return view('undangan/kabinet');
});

Route::get('/website', function () {
    return view('undangan/website');
});

Route::get('/detail-product', function () {
    return view('product/detail-product');
});
