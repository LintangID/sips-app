<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Main\UserController;
use App\Http\Controllers\Main\SettingController;
use App\Http\Controllers\Main\DashboardController;
use App\Http\Controllers\Main\GenerateController;
use App\Http\Controllers\Main\IncomingController;
use App\Http\Controllers\Main\OutgoingController;

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

Route::get('/', [LoginController::class, 'index'])->middleware('guest');

// Authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Main
Route::prefix('main')
        ->middleware('auth')
        ->group(function(){
            Route::get('/dashboard',[DashboardController::class, 'index'])->name('main-dashboard');

            //Surat Keluar
            Route::resource('/surat-keluar',OutgoingController::class);
            Route::get('surat-keluar/download/{id}', [ OutgoingController::class,'download_surat'])->name('download-surat');
            Route::get('print/surat-keluar', [ OutgoingController::class,'form_print'])->name('form-print-surat-keluar');
            Route::post('print/surat-keluar', [ OutgoingController::class,'print_surat'])->name('print-surat-keluar');

            //Surat Masuk
            Route::resource('/surat-masuk',IncomingController::class);
            Route::get('print/surat-masuk', [ IncomingController::class,'form_print'])->name('form-print-surat-masuk');
            Route::post('print/surat-masuk', [ IncomingController::class,'print_surat'])->name('print-surat-masuk');

            //Generate Surat
            Route::resource('/generate-surat',GenerateController::class);
            Route::prefix('/generate-surat')
            ->group(function(){
                Route::get('surat-keterangan/{id}', [ GenerateController::class, 'form'])->name('form-sk');
                Route::get('surat-panggilan/{id}', [ GenerateController::class, 'form'])->name('form-sp');
                Route::get('surat-tugas/{id}', [ GenerateController::class, 'form'])->name('form-st');
                Route::get('surat-sppd/{id}', [ GenerateController::class, 'form'])->name('form-sppd');
                Route::get('laporan-kegiatan/{id}', [ GenerateController::class, 'form'])->name('form-lk');
                Route::get('surat-dispensasi/{id}', [ GenerateController::class, 'form'])->name('form-sd');
                Route::get('surat-rekomendasi/{id}', [ GenerateController::class, 'form'])->name('form-sr');
                Route::get('lembar-disposisi/{id}', [ GenerateController::class, 'form'])->name('form-ld');

                Route::post('surat-keterangan/', [ GenerateController::class, 'surat_keterangan'])->name('buat-sk');
                Route::post('surat-panggilan/', [ GenerateController::class, 'surat_panggilan'])->name('buat-sp');
                Route::post('surat-tugas/', [ GenerateController::class, 'surat_tugas'])->name('buat-st');
                Route::post('surat-sppd/', [ GenerateController::class, 'surat_sppd'])->name('buat-sppd');
                Route::post('laporan-kegiatan/', [ GenerateController::class, 'laporan_kegiatan'])->name('buat-lk');
                Route::post('surat-dispensasi/', [ GenerateController::class, 'surat_dispensasi'])->name('buat-sd');
                Route::post('surat-rekomendasi/', [ GenerateController::class, 'surat_rekomendasi'])->name('buat-sr');
                Route::post('lembar-disposisi/', [ GenerateController::class, 'lembar_disposisi'])->name('buat-ld');
            });


            //setting
            Route::resource('user', UserController::class)->middleware('admin');
            Route::resource('setting', SettingController::class, [
			    'except' => [ 'show' ]
		    ]);
            Route::get('setting/password',[SettingController::class, 'change_password'])->name('change-password');
            Route::post('setting/upload-profile', [SettingController::class, 'upload_profile'])->name('profile-upload');
            Route::post('change-password', [SettingController::class, 'update_password'])->name('update.password');
        });
