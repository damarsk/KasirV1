<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function() { return view('welcome'); })->name('login');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'loginCheck'])->name('login.check');
Route::resource('users', UserController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/manage/user', [ManageUserController::class, 'index'])->name('manage-user.index');
        Route::get('/manage/user/create', [ManageUserController::class, 'create'])->name('manage-user.create');
        Route::post('/manage/user', [ManageUserController::class, 'store'])->name('manage-user.store');
        Route::get('/manage/user/{id}/edit', [ManageUserController::class, 'edit'])->name('manage-user.edit');
        Route::put('/manage/user/{id}', [ManageUserController::class, 'update'])->name('manage-user.update');
        Route::delete('/manage/user/{id}', [ManageUserController::class, 'destroy'])->name('manage-user.destroy');
    });
    Route::post('produk/cetak/label',[ProdukController::class,'cetakLabel'])->name('produk.cetakLabel');
    Route::PUT('produk/edit/{id}/tambahStok',[ProdukController::class,'tambahStok'])->name('produk.tambahStok');
    Route::get('produk/logproduk',[ProdukController::class,'logproduk'])->name('produk.logproduk');
    Route::get('produk/get-by-kode/{kode}', [ProdukController::class, 'getByKode'])->name('produk.getByKode');
    Route::resource('produk', ProdukController::class);
    Route::resource('penjualan', PenjualanController::class);
    Route::get('penjualan/bayarCash/{id}',[PenjualanController::class,'bayarCash'])->name('penjualan.bayarCash');
    Route::post('penjualan/bayarCash',[PenjualanController::class,'bayarCashStore'])->name('penjualan.bayarCashStore');
    Route::get('penjualan/nota/{id}',[PenjualanController::class,'nota'])->name('penjualan.nota');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

