<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Stolen_missingController;
use App\Http\Controllers\Pet_clinicController;
use App\Http\Controllers\Pet_storeController;

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
    return view('pages.home.home');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/pet_clinic', function () {
    return view('pages.pet_clinic');
});
Route::get('/نەخشە', function () {
    return view('pages.locations');
});

Route::get('/دەربارەی-ئێمە', function () {
    return view('pages.about');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home']); 
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('animal', AnimalController::class);
Route::resource('stolen_missing', Stolen_missingController::class);
Route::resource('pet_clinic', Pet_clinicController::class);
Route::resource('pet_store', Pet_storeController::class);
Route::resource('home', AnimalController::class);
Route::resource('/', AnimalController::class);
