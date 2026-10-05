<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

// -- About
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});

// -- Service
Route::get('/service', function () {
    return view('pages.service');
})->name('service');

// -- Service
Route::group(['prefix' => 'service'], function () {
    Route::get('/', [ServiceController::class, 'index'])->name('service');
});

// -- Contact
Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('contact');

// -- My Project / Portfolio
Route::group(['prefix' => 'my-project'], function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('my-project');
});

// -- Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
});

Route::get('/my-project/{portfolio:slug}', [PortfolioController::class, 'show'])->name('my-project.show');

Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/contacto', [ContactController::class, 'sendMail'])
    ->middleware('throttle:5,1')
    ->name('contact.send');

Route::view('/legal-notice', 'pages.legal.legal-notice')
    ->name('legal.notice');

Route::view('/privacy-policy', 'pages.legal.privacy-policy')
    ->name('legal.privacy');

Route::view('/cookie-policy', 'pages.legal.cookie-policy')
    ->name('legal.cookies');