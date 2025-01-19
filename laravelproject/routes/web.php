<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;


Route::get('/about-us', [AboutController::class, 'index'])->name('aboutus.index');
Route::get('/', [HomeController::class, 'index'])->name('home');  // Home route

Route::get('/about', [AboutController::class, 'index'])->name('about');  // About page route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');  // Contact page route

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');  // Dashboard route
    })->name('dashboard');

    Route::get('logout', [HomeController::class, 'logout'])->name('account.logout');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Cart routes
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

    

    // Product detail page
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
});

// Public product page route (no login required)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Image upload or handling routes
Route::post('/images/upload', [ImageController::class, 'store'])->name('images.upload');

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[UserTypeController::class,'index'])-> middleware(['auth','admin']);
Route::get('/admin/dashboard', [UserTypeController::class, 'index'])->name('admin.dashboard');

route::get('view_category',[AdminController::class,'view_category'])-> middleware(['auth','admin']);

route::post('add_category',[AdminController::class,'add_category'])-> middleware(['auth','admin']);

route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> middleware(['auth','admin']);

route::get('edit_category/{id}',[AdminController::class,'edit_category'])-> middleware(['auth','admin']);

route::post('update_category/{id}',[AdminController::class,'update_category'])-> middleware(['auth','admin']);

route::get('add_product',[AdminController::class,'add_product'])-> middleware(['auth','admin']);

route::post('upload_product',[AdminController::class,'upload_product'])-> middleware(['auth','admin']);

route::get('view_product',[AdminController::class,'view_product'])-> middleware(['auth','admin']);

route::get('delete_product/{id}',[AdminController::class,'delete_product'])-> middleware(['auth','admin']);

route::get('update_product/{id}',[AdminController::class,'update_product'])-> middleware(['auth','admin']);

route::get('edit_product/{id}',[AdminController::class,'edit_product'])-> middleware(['auth','admin']);
