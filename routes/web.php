<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

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

//Interface Login
Route::get('Login',[AdminController::class,'Login']);


//Interface Admin
    Route::get('DashAdmin',[AdminController::class,'DashAdmin']);
    Route::get('TProduk',[AdminController::class,'tambahProduk']);
    Route::get('EProduk/{idp}',[AdminController::class,'editProduk']);
    Route::get('TKasir',[AdminController::class,'tambahKasir']);
    Route::get('EKasir/{idk}',[AdminController::class,'editKasir']);

//CRUD Produk
Route::post('simpanProduk',[AdminController::class,'simpanProduk']);
Route::post('updateProduk/{idp}',[AdminController::class,'updateProduk']);
Route::get('deleteProduk/{idp}',[AdminController::class,'deleteProduk']);

//CRUD Kasir
Route::post('simpanKasir',[AdminController::class,'simpanKasir']);
Route::post('updateKasir/{idk}',[AdminController::class,'updateKasir']);
Route::get('deleteKasir/{idk}',[AdminController::class,'deleteKasir']);


//Interface Kasir 
Route::get('KasirDashboard',[KasirController::class,'DashKasir']);
Route::get('DProduk',[KasirController::class,'dataProduk']);
Route::get('HistoriTransaksi',[KasirController::class,'historiTransaksi']);
Route::get('EDProduk/{idproduk}',[KasirController::class,'editDataProduk']);
Route::get('DPelanggan',[KasirController::class,'dataPelanggan']);
Route::get('EPelanggan/{idpelanggan}',[KasirController::class,'editDataPelanggan']);


//CRUD Produk Kasir
Route::post('createProduk',[KasirController::class,'createProduk']);
Route::post('recreateProduk/{idproduk}',[KasirController::class,'recreateProduk']);
Route::get('deleteDataProduk/{idproduk}',[KasirController::class,'deleteDataProduk']);

//CRUD Pelanggan Kasir
Route::post('simpanPelanggan',[KasirController::class,'simpanPelanggan']);
Route::post('updatePelanggan/{idpelanggan}',[KasirController::class,'updatePelanggan']);
Route::get('deletePelanggan/{idpelanggan}',[KasirController::class,'deletePelanggan']);

//Simpan Transaksi 
Route::post('simpanTransaksi',[KasirController::class,'simpanTransaksi']);
