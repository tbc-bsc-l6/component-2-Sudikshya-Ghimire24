<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');


Route::get('/', function () {
    return view('home'); // This will load the home page
});

// Product routes
Route::get('/product', function () {
    return view('product'); // This will load the product page
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// About page route
Route::get('/aboutus', [AboutController::class, 'index'])->name('aboutus.index');


// Route for the contact page
Route::get('/contactus', [ContactController::class, 'showContactPage'])->name('contact');

// Authentication routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
