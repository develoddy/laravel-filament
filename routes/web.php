<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;

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


/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// -- About
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});

// -- Service
Route::get('/service', function () {
    return view('pages.service');
})->name('service');

// -- Contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// -- Portfolio
Route::group(['prefix' => 'portafolio'], function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
});

Route::get('/portfolio/{portfolio:slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
