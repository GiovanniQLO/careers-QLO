<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\JobController;

Route::get('/', [CareersController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
