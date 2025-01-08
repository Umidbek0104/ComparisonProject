<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaqqoslashController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/index', [PageController::class, 'indexPage'])->name('index.page');



Route::get('/admin',[AdminController::class, 'adminPage'])->name('admin.page');




Route::post('/login/check',[AdminController::class,'loginCheck'])->name('login.check');
Route::get('/login',[AdminController::class,'loginPage'])->name('login.page');



Route::get('/admin/add/phone',[PhoneController::class, 'addPhone'])->name('admin_add.phone');
Route::post('/admin/add/post',[PhoneController::class, 'addPhonePost'])->name('addpost.phone');
Route::get('/admin/all/phone',[PhoneController::class,'allPhone'])->name('admin_all.phone');


Route::get('/admin/phone/edit', [PhoneController::class, 'editPhone'])->name('edit.phone');
Route::post('/admin/phone/edit', [PhoneController::class, 'editPhonepost'])->name('editpost.phone');
Route::get('/admin/phone/{id}/delete', [PhoneController::class, 'deletePhone'])->name('delete.phone');


Route::get('/resolt',[TaqqoslashController::class, 'resoltPage'])->name('resolt.page');
Route::post('/resolt/check',[TaqqoslashController::class, 'resoltCheck'])->name('resolt.check');


