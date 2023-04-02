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
    return view('home');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/ئاژەڵە وونبووەکان', function () {
    return view('missing_pets');
});
Route::get('/ڤێتەرنەکان', function () {
    return view('veterinary');
});
Route::get('/نەخشە', function () {
    return view('locations');
});

Route::get('/دەربارەی-ئێمە', function () {
    return view('about');
});

Route::get('/ماڵەوە', function () {
    return view('home');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('animals', AnimalController::class);
