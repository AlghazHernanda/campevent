<?php

use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DasboardEventController;
use App\Http\Controllers\WhistlistController;
use App\Http\Controllers\WishlistController;

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
// Route::get('/', function () {
//     return view('welcome');
// });

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

//event detail
Route::get('eventdetail', function () {
    return view('eventdetail');
});

//dashboard admin
Route::get('dashboard', function () {
    return view('dashboard');
});

//request event
// Route::get('requestevent', function () {
//     return view('requestevent');
// });

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
//login authenticate
Route::post('/login', [LoginController::class, 'authenticate']);
//logout
Route::post('/logout', [LoginController::class, 'logout']);


//routing register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/verify', [RegisterController::class, 'verify'])->name('verify');
Route::get('/registercheck', [RegisterController::class, 'registercheck']);
Route::get('/resendEmail', [RegisterController::class, 'resendEmail']);

//routing update profile di dalam Registercontroller
Route::get('/profile', [RegisterController::class, 'getProfile'])->middleware('auth'); //hanya bisa diakses kalo udah login
Route::put('/profile', [RegisterController::class, 'update'])->middleware('auth');

//routing change passworod di dalam Registercontroller
Route::get('/change', [RegisterController::class, 'getChange'])->middleware('auth');
Route::put('/change', [RegisterController::class, 'updateChange'])->middleware('auth');



//forgotpassword
Route::get('/forgot', [ForgotPasswordController::class, 'ForgetPassword']);
Route::post('/forgot', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordPost');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPassword'])->name('ResetPasswordGet');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');

//Event
Route::get('/', [DasboardEventController::class, 'welcomeShow']);
Route::get('/myevent', [DasboardEventController::class, 'index'])->middleware('auth');
Route::get('/RegisterEvent', [DasboardEventController::class, 'create'])->middleware('auth');
Route::post('/RegisterEvent', [DasboardEventController::class, 'store'])->middleware('auth');
Route::get('/editEvent/{event:id}', [DasboardEventController::class, 'edit'])->middleware('auth');
Route::put('/editEvent/{event:id}', [DasboardEventController::class, 'update'])->middleware('auth');
Route::get('/eventdetail/{event:id}', [DasboardEventController::class, 'show'])->middleware('auth');

Route::delete('/deleteEvent/{event:id}', [DasboardEventController::class, 'destroy'])->middleware('auth');


//whistlist
Route::get('/wishlist', [WishlistController::class, 'index'])->middleware('auth');
Route::get('/listevent', [WishlistController::class, 'listEvent'])->middleware('auth');
Route::get('/listevent/{eventType:id}', [WishlistController::class, 'listEventType'])->middleware('auth');
Route::post('/eventdetail/{event:id}', [WishlistController::class, 'loveWishlist'])->middleware('auth');

//admin
Route::get('/admin', [AdminDashboardController::class, 'index'])->middleware('admin');
Route::get('/admin/accept/{event:id}', [AdminDashboardController::class, 'edit'])->middleware('admin');
Route::put('/admin/accept/{event:id}', [AdminDashboardController::class, 'update'])->middleware('admin');
Route::get('/requestevent', [AdminDashboardController::class, 'requestevent'])->middleware('admin');
Route::get('/eventadmin/{event:id}', [AdminDashboardController::class, 'show'])->middleware('admin');


//contact us
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

//My Event
// Route::get('myevent', function () {
//     return view('myevent');
// });

// //register check
// Route::get('registercheck', function () {
//     return view('registercheck');
// });
