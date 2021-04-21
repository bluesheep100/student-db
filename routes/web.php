<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckinCardController;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/checkin', [CheckinCardController::class, 'edit'])->name('checkin');
    Route::post('/checkin', [CheckinCardController::class, 'update']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

    Route::post('/students/create', [StudentController::class, 'store'])->name('student-create');
});

Auth::routes();
