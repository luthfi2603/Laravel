<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/', function(){
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Muhammad Luthfi",
        "email" => "luthfim904@gmail.com",
        "image" => "x-chan.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']); // halaman single post

Route::get('categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

/*Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});*/

/*Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'about',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});*/

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::get('/test', [PostController::class, 'createTest']);
Route::get('/test-store', [PostController::class, 'storeTest']);
Route::post('/test', [PostController::class, 'storeTest2']);