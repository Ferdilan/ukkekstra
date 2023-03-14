<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarEkstraController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\JurnalEkstraController;
use App\Http\Controllers\AnggotaEkstraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;

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
route::get('/registrasi',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth:kesiswaan','ceklevel:kesiswaan']], function () {
Route::resource('/daftarekstra', DaftarEkstraController::class);
route::get('/tambahpembina',[LoginController::class,'tambahpembina'])->name('tambahpembina');
route::post('/simpanpembina',[LoginController::class,'simpanpembina'])->name('simpanpembina');
route::get('/daftarpembina',[LoginController::class,'daftarpembina'])->name('daftarpembina');
route::delete('/daftarpembina/{id}',[LoginController::class,'destroy'])->name('destroy');
Route::get('/jurnalexport', [JurnalEkstraController::class,'export'])->name('jurnalexport');
Route::get('/anggotaekstraexport', [AnggotaEkstraController::class,'export'])->name('anggotaekstraexport');
Route::get('/pendaftarexport', [PendaftarController::class,'export'])->name('pendaftarexport');
});

Route::group(['middleware' => ['auth:user','ceklevel:siswa']], function () {
    Route::resource('/siswa/pendaftaran', PendaftarController::class);
    Route::resource('/siswa', WelcomeController::class);
});

Route::group(['middleware' => ['auth:kesiswaan,pembina','ceklevel:kesiswaan,pembina']], function () {
    Route::resource('/', WelcomeController::class);
    Route::resource('/anggotaekstra', AnggotaEkstraController::class);
    Route::resource('/jurnal', JurnalEkstraController::class);
    Route::resource('/pendaftaran', PendaftarController::class);
    Route::post('/pendaftaran/konfirmasi/{id}', [PendaftarController::class,'konfirmasi']);
    Route::post('/pendaftaran/konfirmasi2/{id}', [PendaftarController::class,'konfirmasi2']);
    Route::post('/pendaftaran/konfirmasi3/{id}', [PendaftarController::class,'konfirmasi3']);
});