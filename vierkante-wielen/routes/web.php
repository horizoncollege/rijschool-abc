<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\InstructorsController;

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

// Index
Route::view('/', 'index');

// Pages
Route::view('/algemene-voorwaarden', 'pages.algemene-voorwaarden');
Route::view('/autorijles-bij-ons', 'pages.autorijles-bij-ons');
Route::view('/over-ons', 'pages.over-ons');
Route::view('/contact', 'pages.contact');
Route::view('/tarieven', 'pages.tarieven');
Route::view('/gratis-proefrijles', 'pages.gratis-proefrijles');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/instructors-create', [InstructorsController::class, 'create'])->name('instructors.create');
Route::get('/instructors-update/{id}', [InstructorsController::class, 'update'])->name('instructors.update');
Route::post('/instructors-store', [InstructorsController::class, 'store'])->name('instructors.store');
Route::delete('/instructors/{id}', [InstructorsController::class, 'destroy'])->name('instructors.destroy');


// Dashboard Edit
Route::view('/dashboard-gegevens-aanpassen', 'pages.dashboard.dashboard-gegevens-aanpassen');

// Contact Form
Route::post('/contact-form', [ContactController::class, 'store'])->name('contact.store');
Route::get('/dashboard-contact', [ContactController::class, 'index'])->name('dashboard-contact');
Route::delete('/contact-form/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Calendar routes
Route::get('calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('calendar/store', [CalendarController::class, 'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');

// Authentication routes
require __DIR__ . '/auth.php';
