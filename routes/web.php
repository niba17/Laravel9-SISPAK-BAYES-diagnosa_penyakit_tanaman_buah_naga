<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\GejalaPenyakitController;
use App\Http\Controllers\PenyakitSolusiController;
use App\Http\Controllers\SolusiController;
use App\Http\Controllers\PakarController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KDBController;

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

Route::get('/', [LandController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/akun', [AkunController::class, 'index'])->middleware('auth')->name('akun');
Route::get('/akun-add', [AkunController::class, 'create'])->middleware('auth')->name('akun-add');
Route::post('/akun-store', [AkunController::class, 'store'])->middleware('auth');
Route::get('/akun-edit/{id}', [AkunController::class, 'edit'])->middleware('auth')->name('akun-edit');
Route::put('/akun-update/{id}', [AkunController::class, 'update'])->middleware('auth');
Route::get('/akun-destroy/{id}', [AkunController::class, 'destroy'])->middleware('auth');

Route::get('/member-create', [MemberController::class, 'create'])->middleware('guest')->name('member-create');
Route::post('/member-store', [MemberController::class, 'store'])->middleware('guest');

Route::get('/pakar_member-create', [MemberController::class, 'pakar_create'])->middleware('guest')->name('member-pakar-create');
Route::post('/pakar_member-store', [MemberController::class, 'pakar_store'])->middleware('guest');

Route::get('/gejala', [GejalaController::class, 'index'])->middleware('auth')->name('gejala');
Route::get('/gejala-add', [GejalaController::class, 'create'])->middleware('auth')->name('gejala-add');
Route::post('/gejala-store', [GejalaController::class, 'store'])->middleware('auth');
Route::get('/gejala-edit/{id}', [GejalaController::class, 'edit'])->middleware('auth')->name('gejala-edit');
Route::put('/gejala-update/{id}', [GejalaController::class, 'update'])->middleware('auth');
Route::get('/gejala-destroy/{id}', [GejalaController::class, 'destroy'])->middleware('auth');
Route::get('/gejala-request', [GejalaController::class, 'request'])->name('gejala-request');

Route::get('/penyakit', [PenyakitController::class, 'index'])->middleware('auth')->name('penyakit');
Route::get('/penyakit-add', [PenyakitController::class, 'create'])->middleware('auth')->name('penyakit-add');
Route::post('/penyakit-store', [PenyakitController::class, 'store'])->middleware('auth');
Route::get('/penyakit-edit/{id}', [PenyakitController::class, 'edit'])->middleware('auth')->name('penyakit-edit');
Route::put('/penyakit-update/{id}', [PenyakitController::class, 'update'])->middleware('auth');
Route::get('/penyakit-destroy/{id}', [PenyakitController::class, 'destroy'])->middleware('auth');
Route::get('/penyakit-request', [PenyakitController::class, 'request'])->name('penyakit-request');

Route::get('/solusi', [SolusiController::class, 'index'])->middleware('auth')->name('solusi');
Route::get('/solusi-add', [SolusiController::class, 'create'])->middleware('auth')->name('solusi-add');
Route::post('/solusi-store', [SolusiController::class, 'store'])->middleware('auth');
Route::get('/solusi-edit/{id}', [SolusiController::class, 'edit'])->middleware('auth')->name('solusi-edit');
Route::put('/solusi-update/{id}', [SolusiController::class, 'update'])->middleware('auth');
Route::get('/solusi-destroy/{id}', [SolusiController::class, 'destroy'])->middleware('auth');
Route::get('/solusi-request', [SolusiController::class, 'request'])->name('solusi-request');

Route::get('/relasi', [RelasiController::class, 'index'])->middleware('auth')->name('relasi');
Route::get('/relasi-add', [RelasiController::class, 'create'])->middleware('auth')->name('relasi-add');
// Route::post('/relasi-validator_add', [RelasiController::class, 'validator_add'])->middleware('auth');
Route::post('/relasi-store', [RelasiController::class, 'store'])->middleware('auth');
Route::get('/relasi-edit/{id}', [RelasiController::class, 'edit'])->middleware('auth')->name('relasi-edit');
Route::put('/relasi-update/{id}', [RelasiController::class, 'update'])->middleware('auth');
Route::get('/relasi-destroy/{id}', [RelasiController::class, 'destroy'])->middleware('auth');
Route::get('/relasi-request', [RelasiController::class, 'request'])->name('relasi-request');

Route::get('/gejala_penyakit', [GejalaPenyakitController::class, 'index'])->middleware('auth')->name('gejala_penyakit');
Route::get('/gejala_penyakit-add', [GejalaPenyakitController::class, 'create'])->middleware('auth')->name('gejala_penyakit-add');
Route::post('/gejala_penyakit-store', [GejalaPenyakitController::class, 'store'])->middleware('auth');
Route::get('/gejala_penyakit-edit/{id}', [GejalaPenyakitController::class, 'edit'])->middleware('auth')->name('gejala_penyakit-edit');
Route::put('/gejala_penyakit-update/{id}', [GejalaPenyakitController::class, 'update'])->middleware('auth');
Route::get('/gejala_penyakit-destroy/{id}', [GejalaPenyakitController::class, 'destroy'])->middleware('auth');
Route::get('/gejala_penyakit-request', [GejalaPenyakitController::class, 'request'])->name('gejala_penyakit-request');

Route::get('/penyakit_solusi', [PenyakitSolusiController::class, 'index'])->middleware('auth')->name('penyakit_solusi');
Route::get('/penyakit_solusi-add', [PenyakitSolusiController::class, 'create'])->middleware('auth')->name('penyakit_solusi-add');
Route::post('/penyakit_solusi-store', [PenyakitSolusiController::class, 'store'])->middleware('auth');
Route::get('/penyakit_solusi-edit/{id}', [PenyakitSolusiController::class, 'edit'])->middleware('auth')->name('penyakit_solusi-edit');
Route::put('/penyakit_solusi-update/{id}', [PenyakitSolusiController::class, 'update'])->middleware('auth');
Route::get('/penyakit_solusi-destroy/{id}', [PenyakitSolusiController::class, 'destroy'])->middleware('auth');
Route::get('/penyakit_solusi-request', [PenyakitSolusiController::class, 'request'])->name('penyakit_solusi-request');

Route::get('/kecamatan', [KecamatanController::class, 'index'])->middleware('auth')->name('kecamatan');
Route::get('/kecamatan-add', [KecamatanController::class, 'create'])->middleware('auth')->name('kecamatan-add');
Route::post('/kecamatan-store', [KecamatanController::class, 'store'])->middleware('auth');
Route::get('/kecamatan-edit/{id}', [KecamatanController::class, 'edit'])->middleware('auth')->name('kecamatan-edit');
Route::put('/kecamatan-update/{id}', [KecamatanController::class, 'update'])->middleware('auth');
Route::get('/kecamatan-destroy/{id}', [KecamatanController::class, 'destroy'])->middleware('auth');
Route::get('/kecamatan-request', [KecamatanController::class, 'request'])->name('kecamatan-request');
// Route::get('/kecamatan-requestKecKel', [KecamatanController::class, 'requestKecKel'])->name('kecamatan-requestKecKel');

Route::get('/kelurahan', [KelurahanController::class, 'index'])->middleware('auth')->name('kelurahan');
Route::get('/kelurahan-add', [KelurahanController::class, 'create'])->middleware('auth')->name('kelurahan-add');
Route::post('/kelurahan-store', [KelurahanController::class, 'store'])->middleware('auth');
Route::get('/kelurahan-edit/{id}', [KelurahanController::class, 'edit'])->middleware('auth')->name('kelurahan-add');
Route::put('/kelurahan-update/{id}', [KelurahanController::class, 'update'])->middleware('auth');
Route::get('/kelurahan-destroy/{id}', [KelurahanController::class, 'destroy'])->middleware('auth');
Route::get('/kelurahan-request', [KelurahanController::class, 'request'])->name('kelurahan-request');

Route::get('/pakar', [PakarController::class, 'index'])->middleware('auth')->name('pakar');
Route::get('/pakar-add', [PakarController::class, 'create'])->middleware('auth')->name('pakar-add');
Route::post('/pakar-store', [PakarController::class, 'store'])->middleware('auth');
Route::get('/pakar-edit/{id}', [PakarController::class, 'edit'])->middleware('auth')->name('pakar-edit');
Route::put('/pakar-update/{id}', [PakarController::class, 'update'])->middleware('auth');
Route::get('/pakar-destroy/{id}', [PakarController::class, 'destroy'])->middleware('auth');
Route::get('/pakar-request', [PakarController::class, 'request'])->name('pakar-request');

Route::get('/lokasi', [LokasiController::class, 'index'])->middleware('auth')->name('lokasi');
Route::get('/lokasi-add', [LokasiController::class, 'create'])->middleware('auth')->name('lokasi-add');
Route::post('/lokasi-store', [LokasiController::class, 'store'])->middleware('auth');
Route::get('/lokasi-edit/{id}', [LokasiController::class, 'edit'])->middleware('auth')->name('lokasi-edit');
Route::put('/lokasi-update/{id}', [LokasiController::class, 'update'])->middleware('auth');
Route::get('/lokasi-destroy/{id}', [LokasiController::class, 'destroy'])->middleware('auth');
Route::get('/lokasi-request', [LokasiController::class, 'request'])->name('lokasi-request');

Route::get('/k_d_b', [KDBController::class, 'index'])->middleware('auth')->name('k_d_b');

Route::post('/perhitungan-index', [PerhitunganController::class, 'index'])->middleware('auth')->name('perhitungan-index');
Route::post('/perhitungan-simpan', [PerhitunganController::class, 'save'])->middleware('auth')->name('perhitungan-simpan');

Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware('auth')->name('riwayat');
Route::get('/riwayat-detail/{date}', [RiwayatController::class, 'detail'])->middleware('auth')->name('riwayat-detail');
// Route::get('/riwayat-add', [RiwayatController::class, 'create'])->middleware('auth')->name('riwayat-add');
// Route::post('/riwayat-store', [RiwayatController::class, 'store'])->middleware('auth');
// Route::get('/riwayat-edit/{id}', [RiwayatController::class, 'edit'])->middleware('auth')->name('riwayat-edit');
// Route::put('/riwayat-update/{id}', [RiwayatController::class, 'update'])->middleware('auth');
Route::get('/riwayat-destroy/{date}', [RiwayatController::class, 'destroy'])->middleware('auth');