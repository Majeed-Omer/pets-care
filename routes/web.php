<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AnimalController;


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

Route::get('/ئاژەڵە-ونبووەکان', function () {
    return view('pages.missing-pets.missing_pets_page');
});
Route::get('/ڤێتەرنەکان', function () {
    return view('pages.veterinary');
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
