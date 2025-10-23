<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingpage;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [landingpage::class, 'index'])->name('landing');
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
   