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
