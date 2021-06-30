<?php

namespace App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog', [DashboardController::class, 'show']);
Route::get('admin', [DashboardController::class, 'index']);
Route::get('admin/profile', function () {
    return view('admin.profile');
});
Route::resource('admin/authors', AuthorController::class);
Route::resource('admin/blogs', BlogController::class);
Route::resource('admin/categories', CategoryController::class);