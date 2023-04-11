<?php

use App\Http\Controllers\admin\barangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\kategoriController;
use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\profileController;
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
    return view('frontend.index');
});
Route::get('/product/{item}', [HomeController::class, 'show'])->name('product.view');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user route
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/member/home", [HomeController::class, 'userHome'])->name('home.member');

    // cart
    Route::get("/member/cart", [HomeController::class, 'cartMember'])->name('cart.member');

    // transaction
    Route::get("/member/transaction", [HomeController::class, 'transactionMember'])->name('transaction.member');

    // account
    Route::get("/member/account", [HomeController::class, 'accountMember'])->name('account.member');
    Route::get("/member/password", [HomeController::class, 'password'])->name('password.member');


    Route::put("/member/account", [HomeController::class, 'accountUpdate'])->name('update.member');
    Route::put("/member/password", [HomeController::class, 'passwordUpdate'])->name('update.password.member');
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

    // kategori
    Route::get('/admin/kategori', [kategoriController::class, 'index'])->name('kategori.master');
    // Route::get('/admin/kategori', [kategoriController::class, 'tambah_kategori'])->name('kategori.tambah');

    // pre-order
    Route::get('/admin/preorder', [orderController::class, 'index_preorder'])->name('preoder.admin');
    
    // request-order
    Route::get('/admin/request', [orderController::class, 'index_request'])->name('request.admin');

    // profile
    Route::get('/admin/profile', [profileController::class, 'index'])->name('admin.profile');

    // category
    // Route::get("kategori/admin", [CategoryController::class, 'index'])->name('kategori.admin');
    // Route::get("kategori/create", [CategoryController::class, 'create'])->name('kategori.create.admin');
    // Route::get("kategori/{item}/edit", [CategoryController::class, 'edit'])->name('kategori.edit.admin');
    
    // Route::post("kategori/admin", [CategoryController::class, 'tambah']);

    // Route::put('kategori/{item}', [CategoryController::class, 'update']);
});
