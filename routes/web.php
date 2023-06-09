<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('index');
})->name('home');
Route::get('/profile', function () {
    return view('profile.profile');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cookies', function () {
    return view('cookies');
});
Route::get('/auth/login', function () {
    return view('layouts.components.auth.login');
})->name('login');
Route::get('/auth/register', function () {
    return view('layouts.components.auth.register');
})->name('register');

Route::get('/auth/register',[UserController::class, 'register']);
Route::post('/auth/register',[UserController::class, 'register_action'])->name('register.action');

Route::get('/auth/login',[UserController::class, 'login'])->middleware('guest');
Route::post('/auth/login',[UserController::class, 'login_action'])->name('login.action');

Route::get('/auth/password',[UserController::class, 'password'])->name('password');
Route::post('/auth/password',[UserController::class, 'password_action'])->name('password_action');

// Route::get('logout',[UserController::class, 'logout'])->name('logout');
Route::post('logout',[UserController::class, 'logout'])->name('logout');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']); // Route Model Binding ini yang dicari id tetapi kita ingin mencari slug

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');