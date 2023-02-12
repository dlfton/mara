<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user route
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/member/home", [HomeController::class, 'userHome'])->name('home.member');
});

// admin route
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');
});
