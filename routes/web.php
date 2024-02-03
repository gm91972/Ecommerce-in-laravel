<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route for index page
Route::get('/', [HomeController::class, 'index']);

// Admin and User Redirection Routes
route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

// Admin Dashboard routes

// CATEGORY ROUTES
route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');
route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');

// PRODUCT ROUTES
route::get('/view_product', [AdminController::class, 'view_product'])->name('view_product');
route::post('/add_product', [AdminController::class, 'add_product'])->name('add_product');
route::get('/show_product', [AdminController::class, 'show_product'])->name('show_product');
route::get('/edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
route::post('/edit_product_update/{id}', [AdminController::class, 'edit_product_update'])->name('edit_product_update');
route::get('/delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');

Route::get('/admin_search', [AdminController::class, 'admin_search']);


// PDF DOWNLOAD ROUTE
route::get('/download_pdf', [AdminController::class, 'download_pdf'])->name('download_pdf');

// Product Detail Page Route
route::get("/product_details/{id}",[HomeController::class,'product_details'])->name('product_details');

// Cart Routes
Route::get('/cart', [HomeController::class, 'show_cart']);
route::post("/add_to_cart/{id}",[HomeController::class,'add_to_cart'])->name('add_to_cart');
route::get("/delete_from_cart/{id}",[HomeController::class,'delete_from_cart'])->name('delete_from_cart');

// Checkout
Route::get('/checkout', [HomeController::class, 'show_checkout']);
Route::post('place_order', [HomeController::class, 'place_order']);

// Product Search User Page

Route::get('/product_search', [HomeController::class, 'product_search']);

// view all pages routes
Route::get('/pages/view_all_earbuds', [HomeController::class, 'view_all_earbuds'])->name('view_all_earbuds');
Route::get('/pages/view_all_mobiles', [HomeController::class, 'view_all_mobiles'])->name('view_all_mobiles');
Route::get('/pages/view_all_laptops', [HomeController::class, 'view_all_laptops'])->name('view_all_laptops');
Route::get('/pages/view_all_accessories', [HomeController::class, 'view_all_accessories'])->name('view_all_accessories');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
