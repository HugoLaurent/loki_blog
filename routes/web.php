<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/ajouter-article', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
Route::get('/articles/{slug}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{slug}', [ArticlesController::class, 'update'])->name('articles.update');
Route::delete('/articles/{slug}', [ArticlesController::class, 'destroy'])->name('articles.destroy');
