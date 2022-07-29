<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('about', function () {
    return view('pages.about');
})->name('about');
Route::get('service', function () {
    return view('pages.service');
})->name('service');
Route::get('service', function () {
    return view('pages.service');
})->name('service');
Route::get('cyanide', function () {
    return view('pages.products.cyanide');
})->name('cyanide');
Route::get('caustic_soda', function () {
    return view('pages.products.caustic_soda');
})->name('caustic_soda');
Route::get('mercury', function () {
    return view('pages.products.mecury');
})->name('mercury');
Route::get('hydrogen_peroxide', function () {
    return view('pages.products.hydrogen_peroxide');
})->name('hydrogen_peroxide');
Route::get('sulphuric_acid', function () {
    return view('pages.products.sulphuric_acid');
})->name('sulphuric_acid');
Route::get('support', function () {
    return view('pages.support');
})->name('support');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
