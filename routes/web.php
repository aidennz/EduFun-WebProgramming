<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
        ->name('pages.home');

Route::get('category/{id}', [CategoryController::class, 'show'])
        ->name('pages.category.show');

Route::get('Course/{id}', [CourseController::class, 'show'])
        ->name('pages.course.show');

Route::get('writers', [WriterController::class, 'index'])
        ->name('pages.writers.index');

Route::get('/writer/{id}', [WriterController::class, 'show'])
        ->name('pages.writer.show');

Route::get('/about', [AboutController::class, 'index'])
        ->name('pages.about');

Route::get('/popular', [CourseController::class, 'popular'])
        ->name('pages.popular');