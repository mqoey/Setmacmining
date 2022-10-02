<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('support', [SupportController::class, 'index'])->name('support');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
