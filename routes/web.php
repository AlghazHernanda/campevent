<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\auth\ForgotPasswordController;

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

//home
Route::get('/', function () {
    return view('welcome');
});

//about us
Route::get('about', function () {
    return view('about');
});

//faq
Route::get('faq', function () {
    return view('faq');
});

//reset password
Route::get('reset', function () {
    return view('reset');
});
Route::get('resetcheck', function () {
    return view('resetcheck');
});

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//login authenticate
Route::post('/login', [LoginController::class, 'authenticate']);



//routing register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/verify', [RegisterController::class, 'verify'])->name('verify');

Route::get('/forgot', [ForgotPasswordController::class, 'ForgetPassword']);
Route::post('/forgot', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

//register check
Route::get('registercheck', function () {
    return view('registercheck');
});
