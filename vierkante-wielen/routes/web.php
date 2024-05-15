<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

// Dashboard Opmerkingen
Route::get('/dashboard-opmerkingen', [DashboardController::class, 'showOpmerkingen'])->name('dashboard-opmerkingen');
Route::delete('/bookings/{id}', [DashboardController::class, 'destroy'])->name('bookings.destroy');

// Contact Form
Route::post('/contact-form', [ContactController::class, 'store'])->name('contact.store');
Route::get('/dashboard-contact', [ContactController::class, 'index'])->name('dashboard-contact');
Route::delete('/contact-form/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

// Calendar routes
Route::get('calendar', [DashboardController::class, 'index'])->name('calendar.index');
Route::post('calendar/store', [DashboardController::class, 'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [DashboardController::class, 'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [DashboardController::class, 'destroy'])->name('calendar.destroy');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Logout route
Route::post('/logout', function () {
    // Logout user
    auth()->logout();
    // Redirect to home or any other page after logout
    return redirect('/');
})->name('logout');

// Authentication routes
require __DIR__ . '/auth.php';

// Registration routes
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');
