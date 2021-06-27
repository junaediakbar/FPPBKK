<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PrintingsController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\Admin;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_role');

Route::get('/order',[OrdersController::class, 'add']);
Route::post('/order',[OrdersController::class, 'create']);

Route::get('/review', [ReviewController::class, 'add']);
Route::post('/review', [ReviewController::class, 'create']);

Route::get('/printing',[PrintingsController::class, 'add']);
Route::post('/printing',[PrintingsController::class, 'create']);

Route::get('/product',[ProductController::class, 'add']);
Route::post('/product',[ProductController::class, 'create']);

Route::get('/listreview',[ReviewController::class,'show']);
Route::get('/listorder',[OrdersController::class,'show']);
Route::get('/listprinting',[PrintingsController::class,'show']);
Route::get('/listproduct',[ProductController::class,'show']);


Route::get('/home', function () {
    return view('home');
});

use App\Http\Controllers\ThirdPaymentController;
Route::resource('thirdpayment',ThirdPaymentController::class);