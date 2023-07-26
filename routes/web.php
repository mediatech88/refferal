<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/user/auth',[AuthController::class,'login'])->name('login')->middleware('guest');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [UserController::class,'loadRegister']);
Route::post('/user-registered', [UserController::class,'registered'])->name('registered');

Route::get('/', function () {
    return view('page.admin.a_dashboard');
});
