<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'])->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/filter/category/{category}', [ArticleController::class, 'filterCat'])->name('filter.category');

Route::get('/filter/user/{user}', [ArticleController::class, 'filterAuth'])->name('filter.user');

Route::get('/careers', [PublicController::class, 'careers']) -> name('careers');

Route::post('/careers/submit', [PublicController::class, 'careersSubmit']) -> name('careers.submit');



