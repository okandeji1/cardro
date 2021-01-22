<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/details/{uuid}', [PageController::class, 'single']);
Route::get('/cart/{uuid}', [PageController::class, 'cart']);
Route::get('/checkout/{uuid}', [PageController::class, 'checkout']);

Route::get('/auth-login', function () {
    return view('pages.auth.login');
});

Route::get('/auth-register', function () {
    return view('pages.auth.register');
});

// Authentication
Route::post('/auth-login', [UserController::class, 'login']);
Route::post('/auth-register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class,'logout']);
Route::get('/user-dashboard', [UserController::class,'dashboard']);
Route::get('/user-profile', function () {
    if (Auth::guest()) {
        //is a guest so redirect
        return redirect('/auth-login');
    }
    return view('pages.user.profile');
});
Route::get('user-profile/{uuid}', [UserController::class, 'editProfile']);
Route::post('user-profile/{id}', [UserController::class, 'profileSettings']);

// Post
Route::get('/manage-posts', [PostController::class, 'index']);
Route::post('/add-post', [PostController::class, 'store']);

// Product
Route::get('/manage-products', [ProductController::class, 'index']);
Route::post('/add-product', [ProductController::class, 'store']);

// Transaction
Route::get('/manage-transactions', [TransactionController::class, 'index']);
Route::get('/verify-transactions/{reference}', [TransactionController::class,'handleGatewayCallback']);

// Comment
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/reply/store', [CommentController::class, 'replyStore'])->name('reply.add');

