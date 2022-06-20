<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);

Route::get('about', [LandingController::class, 'about'])->name('about');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('contact', ContactController::class)->only('index', 'update');
    Route::resource('profile', ProfileController::class)->only('edit', 'update');
    Route::resource('gallery', GalleryController::class)->except('show');
    Route::resource('teacher', TeacherController::class)->except('show');
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('article', [ArticleController::class])->except('show');
});

require __DIR__ . '/auth.php';
