<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\EasyPageController;

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

Route::get('/', [IndexController::class, "index"])->name('home');
Route::get('/contacts', [EasyPageController::class, "contacts"])->name('contacts');
Route::get('/about', [EasyPageController::class, "about"])->name('about');
Route::get('/event', [EasyPageController::class, "event"])->name('event');
Route::get('/faq', [EasyPageController::class, "faq"])->name('faq');
Route::get('/gk', [EasyPageController::class, "gk"])->name('gk');
Route::get('/melnitsa', [EasyPageController::class, "melnitsa"])->name('melnitsa');
