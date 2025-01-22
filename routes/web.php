<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LocaleController;
use App\Models\Contact;
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
Route::get('/teams', [HomeController::class, 'team'])->name('frontend.team');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('locale/{lang}',[LocaleController::class, 'setLocale']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::prefix('/admin')->middleware('auth')->group(function(){

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('sliders', SliderController::class);
Route::resource('services', ServiceController::class);
Route::resource('portfolios', PortfolioController::class);
Route::resource('clients', ClientController::class);
Route::resource('teams', TeamController::class);


Route::get('contact', [ContactController::class, 'index'])->name('backend.contact.index');
Route::put('contact/{id}', [ContactController::class, 'update'])->name('backend.contact.index');
Route::get('abouts', [AboutController::class, 'index'])->name('backend.about.index');
Route::put('about/{id}', [AboutController::class, 'update'])->name('backend.about.index');


});
