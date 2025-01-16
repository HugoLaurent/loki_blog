<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');
