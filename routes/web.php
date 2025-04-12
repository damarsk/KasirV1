<?php

use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageKasirController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'loginCheck'])->name('login.check');
Route::resource('users', UserController::class);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    // Manage Kasir Routes
    Route::get('/manage/user', [ManageKasirController::class, 'index'])->name('manage.user');
    Route::get('/manage/user/create', [ManageKasirController::class, 'create'])->name('manage-kasir.create');
    Route::post('/manage/user', [ManageKasirController::class, 'store'])->name('manage-kasir.store');
    Route::get('/manage/user/{id}/edit', [ManageKasirController::class, 'edit'])->name('manage-kasir.edit');
    Route::put('/manage/user/{id}', [ManageKasirController::class, 'update'])->name('manage-kasir.update');
    Route::delete('/manage/user/{id}', [ManageKasirController::class, 'destroy'])->name('manage-kasir.destroy');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::post('produk/cetak/label',[ProdukController::class,'cetakLabel'])->name('produk.cetakLabel');
    Route::PUT('produk/edit/{id}/tambahStok',[ProdukController::class,'tambahStok'])->name('produk.tambahStok');
    Route::get('produk/logproduk',[ProdukController::class,'logproduk'])->name('produk.logproduk');
    Route::resource('produk', ProdukController::class);
    Route::resource('penjualan', PenjualanController::class);
    Route::get('penjualan/bayarCash/{id}',[PenjualanController::class,'bayarCash'])->name('penjualan.bayarCash');
    Route::post('penjualan/bayarCash',[PenjualanController::class,'bayarCashStore'])->name('penjualan.bayarCashStore');
    Route::get('penjualan/nota/{id}',[PenjualanController::class,'nota'])->name('penjualan.nota');
});
