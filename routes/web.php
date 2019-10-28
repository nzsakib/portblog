<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('blog', [PostController::class, 'index'])->name('blog.index');
Route::get('blog/create', [PostController::class, 'create'])->name('blog.create');
Route::post('blog/create', [PostController::class, 'store'])->name('blog.store');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('blog.show');
