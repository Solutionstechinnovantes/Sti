<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
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

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/sliders', [HomeController::class, 'sliders'])->name('frontend.sliders');
Route::get('/services', [HomeController::class, 'services'])->name('frontend.services');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('frontend.portfolio');
Route::get('/team', [HomeController::class, 'team'])->name('frontend.team');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');


//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('sliders', SliderController::class)->middleware('auth');

