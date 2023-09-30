<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'landing'])->name('getPost');

Route::prefix('/dashboard')->group(function (){
    Route::get('/', [PostController::class, 'index'])->name('getData');
    Route::post('/', [PostController::class, 'store'])->name('postData');
    Route::post('/{id}', [PostController::class, 'update'])->name('updateData');
    Route::get('/{id}', [PostController::class, 'destroy'])->name('deleteData');
});