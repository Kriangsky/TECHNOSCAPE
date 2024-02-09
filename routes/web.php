<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});


// ini tadi
// Route::get('/login', [LoginController::class, 'login']);
// Route::post('/login-post', [LoginController::class, 'LoginPost']);

// ini tadi
// Route::get('/register', [RegisterController::class, 'register']) -> name('register');
// Route::post('/register-post', [RegisterController::class, 'RegisterPost']);

Route::get('/login', [RegisterController::class, 'login']) -> name('login');
Route::post('/login', [RegisterController::class, 'LoginPost']) -> name('login');

Route::get('/register', [RegisterController::class, 'register']) -> name('register');
Route::post('/register-post', [RegisterController::class, 'RegisterPost']) -> name('register');

Route::get('/data', [RegisterController::class, 'Data']);

Route::post('/data-post', [DataController::class, 'DataPost']);

Route::get('/home', [HomeController::class, 'index']);
