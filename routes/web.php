<?php

use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\postController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserListController;
use App\Models\Category;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home",
        "active" => "home",
        "name" => "abiyoga",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
    ]);
});
Route::get('/blog', [postController::class, 'index']);

Route::get('/posts/{post:slug}', [postController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'post categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('blog', [
//         'title' => "Post by. Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('blog', [
//         'title' => "Post by. Author : $author->name",
//         'active' => "categories",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');
Route::post('/dashboard/profile/password', [ProfileController::class, 'updatePassword'])->middleware('auth')->name('profile.updatePassword');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
Route::resource('/dashboard/user', UserListController::class)->except('show');
