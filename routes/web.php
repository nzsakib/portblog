<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('blog', [PostController::class, 'index'])->name('blog.index');
