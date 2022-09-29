<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/profile', function () {
//     return view('user.profile');
// });

// Route::get("/laravel", function(){
//     return view("user.profile");
// });
//************************************************************************ */

Route::get('/', [App\Http\Controllers\Admin\MasterController::class, 'dashboard']);
//user
Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('usersIndex');
// "user-create"
Route::get('users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('usersCreate');
//user store
Route::post('users/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('usersStore');
//user edit
Route::get('users/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('usersEdit');
//user update
Route::put('users/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('usersUpdate');
//user delete
Route::delete('users/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('usersDestroy');

// Blog
Route::resource('blogCategory', App\Http\Controllers\Admin\BlogCatergoryController::class);
Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);