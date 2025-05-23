<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect(route('books.index'));
});

Route::resource('books', BookController::class);

Route::resource('authors', AuthorController::class);

Route::resource('attributes', AttributeController::class);

Route::resource('categories', CategoryController::class)->only(['index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('user-page', [PageController::class, 'user'])->name('page.user');
    Route::get('admin-page', [PageController::class, 'admin'])->name('page.admin');
});
