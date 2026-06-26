<?php
use App\Http\Controllers\PrinterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;

Route::resource('departments', DepartmentController::class);

use App\Http\Controllers\VendorController;

Route::resource('vendors', VendorController::class);

use App\Http\Controllers\CartridgeController;

Route::resource('cartridges', CartridgeController::class);

Route::view('/', 'welcome');

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::resource('printers', PrinterController::class);
require __DIR__.'/auth.php';
