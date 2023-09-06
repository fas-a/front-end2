<?php

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

Route::get('/dashboard', function (){
    $post = (object)['title' => 'Other Title', 'totalComments' => 1212];

    return view('blog.dashboard', ['posts' => [$post, 'post2', 'post3', 'post4', 'post5', 'post6', 'post7', 'post8', 'post9', 'post10', 'post11', 'post12', 'post13', 'post14', 'post15']]);
});