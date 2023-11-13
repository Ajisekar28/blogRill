<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//login



Route::middleware('guest')->group(Function(){
	Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'action'])->name('login.action');

    Route::get('/', [GuestController::class, 'index'])->name('blog.index');
    Route::get('/blog/{category}', [GuestController::class, 'category'])->name('blog.category');

    Route::get('/more/{id}', [GuestController::class, 'more'])->name('blog.more');
    Route::get('/more2', [GuestController::class, 'more2'])->name('blog.more2');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/blog', [AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});
//admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function(){
    
//     Route::get('/', [AdminController::class, 'index'])->name('index');
//     Route::get('/blog', [AdminController::class, 'blog'])->name('blog');
//     Route::get('/create', [AdminController::class, 'create'])->name('create');
//     Route::post('/store', [AdminController::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');
//     Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('destroy');
// });



