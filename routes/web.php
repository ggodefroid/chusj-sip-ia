<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/recherche', [MainController::class, 'recherche'])->name('recherche');
Route::get('/articles', [ MainController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [MainController::class, 'show'])->name('article');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/mission', [MainController::class, 'mission'])->name('mission');
Route::get('/financement', [MainController::class, 'financement'])->name('financement');
Route::get('/infrastructure', [MainController::class, 'infrastructure'])->name('infrastructure');
Route::get('/db', [MainController::class, 'db'])->name('db');
Route::get('/decision', [MainController::class, 'decision'])->name('decision');
Route::get('/algorithm', [MainController::class, 'algorithme'])->name('algorithme');

Auth::routes();

Route::get('/admin/index', [AdminController::class, 'index'])->middleware('admin')->name('admin.index');
Route::get('/admin/articlesindex', [AdminController::class, 'articlesindex'])->middleware('admin')->name('adminarticles');
Route::get('/admin/articlecreate', [AdminController::class, 'articlecreate'])->middleware('admin')->name('articlecreate');
Route::post('/admin/articlecreate', [AdminController::class,'store'])->name('article.store');
Route::delete('/admin/articles/{article}/destroy',[ArticleController::class,'destroy'])->name('article.delete');
