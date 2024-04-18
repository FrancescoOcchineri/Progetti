<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::resource('/courses', CourseController::class)->middleware(['auth', 'verified']);

Route::resource('/activities', ActivityController::class)->middleware(['auth', 'verified']);

