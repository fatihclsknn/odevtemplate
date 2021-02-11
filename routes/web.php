<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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


Route::get('',[MainController::class,'index'])->name("homepage");

Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/product',[ProductController::class,'product'])->name('product');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::get('/login',[LoginController::class,'index'])->name('login');



//Route::get('/register',[RegisterController::class,'index'])->name('register');
//Route::post('/register',[RegisterController::class,'index'])->name('register');
Route::match(['post','get'], '/register', [RegisterController::class, 'index'])->name('register');

Route::get('/register-confirm/{activation_code}', [RegisterController::class, 'registerConfirm'])->name('register-confirmation');
Route::get('/logout',[RegisterController::class,'logout'])->name('logout');

