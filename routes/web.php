<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/', [ArticlesController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticlesController::class, 'show'])->name('articles.show');
Route::get('/ajouter-article', [ArticlesController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');
Route::get('/articles/{slug}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{slug}', [ArticlesController::class, 'update'])->name('articles.update');
Route::delete('/articles/{slug}', [ArticlesController::class, 'destroy'])->name('articles.destroy');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/ajouter', [ContactController::class, 'store'])->name('contact.submit');
Route::get('/contact/show', [ContactController::class, 'show'])->name('contact.show');

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index')->middleware('auth');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
