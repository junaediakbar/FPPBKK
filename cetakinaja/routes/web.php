<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdersController;
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
Route::get('/listorder',[OrdersController::class,'show']);

