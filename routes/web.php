<?php

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
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/posts');
});

Route::resource('posts', PostController::class);

Route::resource('posts', PostController::class);



// تحويل الصفحة الرئيسية لصفحة المقالات
Route::get('/', function () {
    return redirect('/posts');
});

// CRUD للمقالات
Route::resource('posts', PostController::class);



Route::get('/', function () {
    return redirect('/posts');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
