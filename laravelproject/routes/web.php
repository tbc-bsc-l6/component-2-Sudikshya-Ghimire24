<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


Route::get('/about-us', [AboutController::class, 'index'])->name('aboutus.index');
Route::get('/', [HomeController::class, 'index'])->name('home');  // Home route
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth','verified'])->name('dashboard');
Route::get('products', [ProductController::class, 'index'])->middleware(['auth','verified'])->name('products');
Route::get('/product', [ProductController::class, 'index'])->name('product');


Route::get('/about', [AboutController::class, 'index'])->name('about');  // About page route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');  // Contact page route




Route::get('/add-product', [ProductController::class, 'create'])->name('add_product');


Route::middleware(['auth', 'admin'])->group(function () {
  Route::get('view_category', [AdminController::class, 'view_category']);
  Route::post('add_category', [AdminController::class, 'add_category']);
  Route::get('delete_category/{id}', [AdminController::class, 'delete_category']);
  Route::get('edit_category/{id}', [AdminController::class, 'edit_category']);
  // Add other admin routes here...
});





    Route::get('logout', [HomeController::class, 'logout'])->name('account.logout');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    


// Public product page route (no login required)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Image upload or handling routes
Route::post('/images/upload', [ImageController::class, 'store'])->name('images.upload');

require __DIR__.'/auth.php';
Route::get('admin/dashboard', [UserTypeController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');

Route::get('view_category',[AdminController::class,'view_category'])-> middleware(['auth','admin']);

Route::post('add_category',[AdminController::class,'add_category'])-> middleware(['auth','admin']);

Route::get('delete_category/{id}',[AdminController::class,'delete_category'])-> middleware(['auth','admin']);

Route::get('edit_category/{id}',[AdminController::class,'edit_category'])-> middleware(['auth','admin']);
Route::post('update_category/{id}',[AdminController::class,'update_category'])-> middleware(['auth','admin']);
Route::get('add_product',[AdminController::class,'add_product'])-> middleware(['auth','admin']);
Route::post('upload_product',[AdminController::class,'upload_product'])-> middleware(['auth','admin']);
Route::get('view_product',[AdminController::class,'view_product'])-> middleware(['auth','admin']);
Route::get('delete_product/{id}',[AdminController::class,'delete_product'])-> middleware(['auth','admin']);
Route::get('update_product/{id}',[AdminController::class,'update_product'])-> middleware(['auth','admin']);
Route::get('edit_product/{id}',[AdminController::class,'edit_product'])-> middleware(['auth','admin']);
Route::get('product_search',[AdminController::class,'product_search'])-> middleware(['auth','admin']);
Route::get('search_product',[HomeController::class,'search_product'])-> middleware(['auth','verified']);
Route::get('product_details/{id}',[HomeController::class,'product_details']);
Route::get('add_cart/{id}',[HomeController::class,'add_cart'])->middleware(['auth','verified']);
Route::get('myorders',[HomeController::class,'myorders'])->middleware(['auth','verified']);

Route::get('mycart',[HomeController::class,'mycart'])->middleware(['auth','verified']);
Route::post('confirm_order',[HomeController::class,'confirm_order'])->middleware(['auth','verified']);Route::get('remove_cart/{id}', [HomeController::class, 'remove_cart'])->middleware(['auth', 'verified']);
Route::get('remove_cart/{id}', [HomeController::class, 'remove_cart'])->middleware(['auth', 'verified']);

Route::get('view_order', [AdminController::class, 'view_order'])->middleware(['auth', 'admin']);

Route::get('on_the_way/{id}', [AdminController::class, 'on_the_way'])->middleware(['auth', 'admin']);

Route::get('delivered/{id}', [AdminController::class, 'delivered'])->middleware(['auth', 'admin']);
