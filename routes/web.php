<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('top');
})->name('top');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); // ミドルウェアのverifiedを追加

Route::get('/user/profile', [UserController::class, 'show'])
    ->middleware('auth')
    ->name('user.profile');

Route::delete('/user/{user}', [UserController::class, 'destroy'])
    ->name('user.destroy');

require __DIR__ . '/auth.php';