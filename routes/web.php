<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\WhatsappController;
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

// Main List Apps
Route::get('/main/dashboard', function () {
    return view('admin.main.dashboard.index');
})->middleware(['verified']);

// Extra List Apps

// Extra Blog
Route::resource('/extra/blog', BlogController::class)->middleware(['verified', 'auth']);
Route::get('/blogJson', [BlogController::class, 'json'])->name('blogJson')->middleware(['verified', 'auth']);;
Route::get('/extra/blog/checkSlug', [BlogController::class, 'checkSlug'])->middleware(['verified', 'auth']);;

// Extra Category
Route::resource('/extra/category', CategoryController::class)->middleware(['verified', 'auth']);
Route::get('/extra/category/checkSlug', [CategoryController::class, 'checkSlug'])->middleware(['verified', 'auth']);;

// Extra Gateway
Route::resource('/extra/sms', SmsController::class)->middleware(['verified', 'auth']);
Route::post('/extra/sendSMS', [SmsController::class, 'send'])->name('sendSMS')->middleware(['verified', 'auth']);
Route::get('/extra/whatsapp', [WhatsappController::class, 'index'])->middleware(['verified', 'auth']);
Route::post('/extra/sendWhatsapp', [WhatsappController::class, 'send'])->middleware(['verified', 'auth']);
