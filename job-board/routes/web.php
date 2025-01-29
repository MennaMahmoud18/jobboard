<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registers', function () {
    return view('account.register'); 
})->name('Account.registers');
Route::post('/registers', [AccountController::class, 'store'])->name('Account.registers.store');

Route::get('/logins', [AccountController::class, 'login'])->name('Account.logins');
Route::post('/logins', [AccountController::class, 'submit'])->name('Account.logins.submit'); 

// تسجيل الخروج
Route::post('/logouts', [AccountController::class, 'logout'])->name('logouts');


