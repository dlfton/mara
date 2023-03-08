<?php

use App\Http\Controllers\admin\barangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
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
    return view('guest');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user route
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/member/home", [HomeController::class, 'userHome'])->name('home.member');
});

// admin route
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    // index
    Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');

    // barang
    Route::get("barang/tambah", [barangController::class, 'tambah'])->name('barang.tambah');
    Route::get("barang/{item}/edit", [barangController::class, 'edit'])->name('barang.edit');
    
    
    Route::post("admin/home", [barangController::class, 'add']);
    Route::put('admin/{item}', [barangController::class, 'update']);
    Route::delete('admin/{item}',[barangController::class, 'destroy']);

    // category
    // Route::get("kategori/admin", [CategoryController::class, 'index'])->name('kategori.admin');
    // Route::get("kategori/create", [CategoryController::class, 'create'])->name('kategori.create.admin');
    // Route::get("kategori/{item}/edit", [CategoryController::class, 'edit'])->name('kategori.edit.admin');
    
    // Route::post("kategori/admin", [CategoryController::class, 'tambah']);

    // Route::put('kategori/{item}', [CategoryController::class, 'update']);
});
