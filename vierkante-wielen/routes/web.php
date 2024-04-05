<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
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

// Custom pages
Route::view('/', 'index');
Route::view('/algemene-voorwaarden', 'pages.algemene-voorwaarden');
Route::view('/autorijles-bij-ons', 'pages.autorijles-bij-ons');
Route::view('/over-ons', 'pages.over-ons');
Route::view('/contact', 'pages.contact');
Route::view('/lespakketten', 'pages.lespakketten');
Route::view('/gratis-proefrijles', 'pages.gratis-proefrijles');

// Dashboard pages
Route::view('/dashboard-contact', 'pages.dashboard.dashboard-contact');
Route::view('/dashboard-lespakketten', 'pages.dashboard.dashboard-lespakketten');

// Contact Form
Route::post('/contact-form', [ContactController::class, 'store'])->name('contact.store');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
