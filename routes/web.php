<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\SettingController;

Route::get('solomitsubishi', [HomeController::class, 'index'])->name('home');

//auth
Route::get('solomitsubishi/auth', [AuthController::class, 'index'])->name('auth');
Route::post('solomitsubishi/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('solomitsubishi/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'admin'], function () {
    Route::get('solomitsubishi/admin', [AdminController::class, 'index'])->name('admin');

    //user
    Route::get('solomitsubishi/admin/user', [UserController::class, 'index'])->name('user');
    Route::post('solomitsubishi/admin/user/tambah', [UserController::class, 'create'])->name('user.create');
    Route::post('solomitsubishi/admin/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::delete('solomitsubishi/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    //setting
    Route::get('solomitsubishi/admin/setting', [SettingController::class, 'index'])->name('setting');
    Route::post('solomitsubishi/admin/setting/update', [SettingController::class, 'update'])->name('setting.update');

    //artikel
    Route::get('solomitsubishi/admin/artikel', [ArtikelController::class, 'index'])->name('artikel');
    Route::get('solomitsubishi/admin/artikel/tambah', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('solomitsubishi/admin/artikel/store', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('solomitsubishi/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::post('solomitsubishi/admin/artikel/update', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('solomitsubishi/admin/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');

    //galeri
    Route::get('solomitsubishi/admin/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::post('solomitsubishi/admin/galeri/tambah', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('solomitsubishi/admin/galeri/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::delete('solomitsubishi/admin/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    //restore
    Route::get('solomitsubishi/admin/restore', [RestoreController::class, 'index'])->name('restore');
    Route::post('solomitsubishi/admin/restore/user/{id}', [RestoreController::class, 'user'])->name('restore.user');
    Route::post('solomitsubishi/admin/restore/artikel/{id}', [RestoreController::class, 'artikel'])->name('restore.artikel');
    Route::post('solomitsubishi/admin/restore/galeri/{id}', [RestoreController::class, 'galeri'])->name('restore.galeri');
});

