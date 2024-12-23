<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

// Get Routes
// Page Routes Start
Route::get('/', [HomeController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);
// Page Routes End


