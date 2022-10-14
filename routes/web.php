<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ReplyController;
use App\Http\Middleware\IssetPostMiddleware;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ListController::class, 'index']);

Route::group(['middleware' => ['issetPost']], function () {

    Route::get('/delete/{id}', [PostController::class, 'delete']);
    Route::get('/edit/{id}', [EditController::class, 'index']);
    Route::get('/update/{id}', [EditController::class, 'update']);
    Route::get('/reply/{id}', [ReplyController::class, 'index']);

});

Route::get('/post', [PostController::class, 'index']);
Route::post('/add', [PostController::class, 'add']);
Route::post('/reply/add', [ReplyController::class, 'add']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
