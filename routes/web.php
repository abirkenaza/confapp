<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConferanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReviseurController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/accountconfirmation', function () {
    return view('accountconfirmation');
});

//conferances
Route::resource('conferances', ConferanceController::class);

//articles
Route::get('/myarticles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/conferance/{conferanceId}/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/articles/delete/{id}', [ArticleController::class, 'delete'])->name('article.delete');

//revisions
Route::resource('revisions', ReviseurController::class);
Route::post('/revision/rate/{id}', [ReviseurController::class, 'rate'])->name('revision.rate');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'management'], function () {
    Voyager::routes();
});
