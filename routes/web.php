<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaqqoslashController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

require __DIR__.'/auth.php';

Route::get('/', [PageController::class, 'indexPage'])->name('index');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [AdminController::class, 'adminPage'])->name('admin.dashboard');
    Route::get('/admin', [AdminController::class, 'adminPage'])->name('admin.page');
    Route::get('/admin/phone/edit', [PhoneController::class, 'editPhone'])->name('edit.phone');
    Route::post('/admin/phone/edit', [PhoneController::class, 'editPhonepost'])->name('editpost.phone');
    Route::get('/admin/phone/{id}/delete', [PhoneController::class, 'deletePhone'])->name('delete.phone');
    Route::get('/admin/add/phone',[PhoneController::class, 'addPhone'])->name('admin_add.phone');
    Route::post('/admin/add/post',[PhoneController::class, 'addPhonePost'])->name('addpost.phone');
    Route::get('/admin/all/phone',[PhoneController::class,'allPhone'])->name('admin_all.phone');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/resolt',[TaqqoslashController::class, 'resoltPage'])->name('resolt.page');
    Route::post('/resolt/check',[TaqqoslashController::class, 'resoltCheck'])->name('resolt.check');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/MyLogin', [AuthController::class, 'showLoginPage'])->name('MyLogin');
    Route::post('/MyLogin', [AuthController::class, 'login'])->name('MyLogin.submit');

    Route::get('/MyRegister', [AuthController::class, 'showRegisterPage'])->name('MyRegister');
    Route::post('/MyRegister', [AuthController::class, 'register'])->name('register.submit');
});

