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

Route::get('/', function () {
    $post = (object)['title' => 'Other Title'];
    $furtherPost = (object)['title' => 'Further Title'];
    return view('blog.landing', ['posts' => ['post1', $post, 'post3'], 'furtherPosts' => [$furtherPost, 'furtherPost2', 'furtherPost3', 'furtherPost4', 'furtherPost5', 'furtherPost6', 'furtherPost7', 'furtherPost8', 'furtherPost9']]);
});

Route::prefix('/dashboard')->group(function (){
    Route::get('/', [PostController::class, 'index'])->name('getData');
    Route::post('/', [PostController::class, 'store'])->name('postData');
});