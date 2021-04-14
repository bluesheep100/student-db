<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckinCardController;

Route::get('/checkin', [CheckinCardController::class, 'edit'])->name('checkin');
Route::post('/checkin', [CheckinCardController::class, 'update']);
