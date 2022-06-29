<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index']);

Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('gallery', [GalleryController::class, 'publicIndex'])->name('gallery.index');
Route::get('gallery/{gallery}', [GalleryController::class, 'publicShow'])->name('gallery.show');
Route::get('comment/{article}', [CommentController::class, 'publicShow'])->name('comment.show');
Route::get('article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::post('article/{article}/comment', [ArticleController::class, 'comment'])->name('article.comment.store');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('contact', ContactController::class)->only('index', 'update');
    Route::resource('profile', ProfileController::class)->only('edit', 'update');
    Route::resource('gallery', GalleryController::class)->except('show');
    Route::resource('teacher', TeacherController::class)->except('show');
    Route::resource('feedback', FeedbackController::class)->only(['index']);
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('article', [ArticleController::class, 'manage'])->name('article.manage');
    Route::get('comment', [CommentController::class, 'index'])->name('comment.manage');
    Route::put('comment/{comment}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::resource('article', ArticleController::class)->except('show', 'index');
    Route::post('gallery/{gallery}/photo', [GalleryController::class, 'storePhoto'])->name('gallery.photo.store');
    Route::delete('/photo/{galleryPhoto}', [GalleryController::class, 'destroyPhoto'])->name('gallery.photo.destroy');
});

require __DIR__ . '/auth.php';
