<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\AboutController;
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




//ABOUT
Route::get('/lihatabout1', [ArsipController::class, 'lihatabout'])->name('arsip.lihatabout');


//ARSIP
Route::get('arsip', [ArsipController::class, 'index']);

Route::get('arsip', function () {
    return view('arsip.index');
});

Route::get('arsip', function () {
    return view('arsip.kop2');
});
Route::get('arsip', function () {
    return view('arsip.cetak');
});
Route::get('arsip', function () {
    return view('arsip.lihatfile');
});
Route::get('arsip', function () {
    return view('arsip.lihat');
});
Route::get('arsip', [ArsipController::class, 'index'])->name('arsip.index');
Route::get('/cetakfile', [ArsipController::class, 'cetak'])->name('arsip.cetak');
Route::get('/koparsip2', [ArsipController::class, 'kop2'])->name('arsip.kop2');
Route::get('/lihatfilearsip', [ArsipController::class, 'lihatfile'])->name('arsip.lihatfile');
Route::get('/lihatlihat', [ArsipController::class, 'lihat'])->name('arsip.lihat');


Route::get('/tambaharsip', [ArsipController::class, 'create'])->name('arsip.create');

Route::post('/arsip', [ArsipController::class, 'store'])->name('arsip.store');
// CETAK
Route::get('/arsip/cetakfile/{id}', [ArsipController::class, 'cetak'])->name('arsip.cetak');
Route::get('/arsip/cetak/{id}', [ArsipController::class, 'kop2'])->name('arsip.kop2');

Route::get('/arsip/cetak1/{id}', [ArsipController::class, 'lihatfile'])->name('arsip.lihatfile');
Route::get('/arsip/cetak1/{id}', [ArsipController::class, 'lihat'])->name('arsip.lihat');


Route::get('/arsip/edit{id}', [ArsipController::class, 'edit'])->name('arsip.edit');
//route edit nilai
Route::post('/arsip/edit{id}', [ArsipController::class, 'update'])->name('arsip.update');


//route delete nilai

Route::post('/arsip/delete{id}', [ArsipController::class, 'destroy'])->name('arsip.destroy');
