<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']); // home
// Route::get('/home', [HomeController::class, 'index']); // article


Route::get('/home', [HomeController::class, 'index'])->name('manage.home');
Route::get('/article/create', [HomeController::class, 'create'])->name('article.create');
Route::post('/article/store', [HomeController::class, 'store'])->name('article.store');
Route::get('/article/edit/{id}', [HomeController::class, 'edit'])->name('article.edit');
Route::post('/article/update/{id}', [HomeController::class, 'update'])->name('article.update');
//Route::get('/article/delete/{id}', [HomeController::class, 'destroy'])->name('article.delete');
Route::get('/article/delete/{id}', [HomeController::class, 'destroy'])->name('article.delete');
Route::get('/article/detail/{id}', [HomeController::class, 'show'])->name('article.show');
