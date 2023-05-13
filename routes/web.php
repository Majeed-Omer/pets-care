<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\SpeciesController;
use App\Http\Controllers\Stolen_missingController;
use App\Http\Controllers\Pet_clinicController;
use App\Http\Controllers\Pet_storeController;
use App\Http\Controllers\AllSupplyController;
use App\Http\Controllers\ShelterController;
use App\Http\Controllers\AdminController;

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
    return view('pages.home');
});

Route::get('/map', function () {
    return view('pages.locations');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/all_supply', function () {
    return view('pages.all_supply');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('animal', AnimalController::class);
Route::resource('species', SpeciesController::class);
Route::resource('stolen_missing', Stolen_missingController::class);
Route::resource('pet_clinic', Pet_clinicController::class);
Route::resource('pet_store', Pet_storeController::class);
Route::resource('home', SpeciesController::class);
Route::resource('/', SpeciesController::class);
Route::get('all_supply', [AllSupplyController::class, 'index']);
Route::resource('shelter', ShelterController::class);

Route::get('admin', [AdminController::class, 'index'])->middleware('admin');
Route::post('/approve/{id}', [SpeciesController::class, 'approve'])->middleware('admin')->name('approve');
Route::post('/reject/{id}', [SpeciesController::class, 'reject'])->middleware('admin')->name('reject');

Route::post('/approve1/{id}', [Stolen_missingController::class, 'approve1'])->middleware('admin')->name('approve1');
Route::post('/reject1/{id}', [Stolen_missingController::class, 'reject1'])->middleware('admin')->name('reject1');