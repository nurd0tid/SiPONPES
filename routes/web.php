<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;

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

Route::get('/main/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['verified']);

Route::get('/main/blog/checkSlug', [BlogController::class, 'checkSlug']);
Route::resource('/main/blog', BlogController::class)->middleware(['verified', 'auth']);
Route::resource('/main/category', CategoryController::class)->middleware(['verified', 'auth']);
