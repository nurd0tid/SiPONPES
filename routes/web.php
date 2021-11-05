<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SmsController;
use App\Models\Category;

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

Route::get('/main/blog/checkSlug', [BlogController::class, 'checkSlug'])->middleware(['verified', 'auth']);;
Route::get('/blogJson', [BlogController::class, 'json'])->name('blogJson')->middleware(['verified', 'auth']);;
Route::get('/main/category/checkSlug', [CategoryController::class, 'checkSlug'])->middleware(['verified', 'auth']);;
Route::resource('/main/blog', BlogController::class)->middleware(['verified', 'auth']);
Route::resource('/main/category', CategoryController::class)->middleware(['verified', 'auth']);
Route::resource('/main/sms', SmsController::class)->middleware(['verified', 'auth']);
Route::post('/main/sendSMS', [SmsController::class, 'send'])->name('sendSMS')->middleware(['verified', 'auth']);
// Route::get('/main/sms', [SmsController::class, 'index']);
// Route::get('/main/sms/', [SmsController::class, 'index']);
