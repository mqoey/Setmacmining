<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){ return view('pages.home'); })->name('home');
Route::get('contact', function(){ return view('pages.contact'); })->name('contact');
Route::get('about', function(){ return view('pages.about'); })->name('about');
Route::get('service', function(){ return view('pages.service'); })->name('service');
Route::get('service', function(){ return view('pages.service'); })->name('service');
Route::get('cyanide', function(){ return view('pages.products.cyanide'); })->name('cyanide');
Route::get('caustic_soda', function(){ return view('pages.products.caustic_soda'); })->name('caustic_soda');
Route::get('mercury', function(){ return view('pages.products.mecury'); })->name('mercury');
Route::get('hydrogen_peroxide', function(){ return view('pages.products.hydrogen_peroxide'); })->name('hydrogen_peroxide');
Route::get('sulphuric_acid', function(){ return view('pages.products.sulphuric_acid'); })->name('sulphuric_acid');


