<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulierController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('autorijles-bij-ons', function () {
    return view('autorijlesbijons');
});

Route::get('tarieven', function () {
    return view('tarieven');
});

Route::get('over-ons', function () {
    return view('over-ons');
});

Route::get('contact', function () {
    return view('contact');
});


Route::get('/formulier', [FormulierController::class, 'createFormulier']);
Route::post('/opslaan', [FormulierController::class, 'opslaanGegevens'])->name('opslaan');
Route::get('/gegevens', [FormulierController::class, 'gegevensTonen']);
