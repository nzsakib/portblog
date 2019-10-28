<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('blog', [PostController::class, 'index'])->name('blog.index');
Route::get('blog/{slug}', [PostController::class, 'show'])->name('blog.show');
