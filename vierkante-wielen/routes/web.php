<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;

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

// Custom pages
Route::view('/', 'index');
Route::view('/algemene-voorwaarden', 'pages.algemene-voorwaarden');
Route::view('/autorijles-bij-ons', 'pages.autorijles-bij-ons');
Route::view('/over-ons', 'pages.over-ons');
Route::view('/contact', 'pages.contact');
Route::view('/tarieven', 'pages.tarieven');
Route::view('/gratis-proefrijles', 'pages.gratis-proefrijles');

// Dashboard pages
Route::view('/dashboard-contact', 'pages.dashboard.dashboard-contact');
Route::view('/dashboard-lespakketten', 'pages.dashboard.dashboard-lespakketten');

// Contact Form
Route::post('/contact-form', [ContactController::class, 'store'])->name('contact.store');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('instructors/create', 'InstructorController@create')->name('instructors.create');


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
