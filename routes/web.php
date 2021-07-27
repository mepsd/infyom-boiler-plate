<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/dashboard', [
    HomeController::class, 'index'
])->name('dashboard');


Route::resource('roles', App\Http\Controllers\RoleController::class);


Route::resource('permissions', App\Http\Controllers\PermissionController::class);

Route::resource('users', App\Http\Controllers\UsersController::class);