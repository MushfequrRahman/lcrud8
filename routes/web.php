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
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\RegistrationController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/login', [AuthController::class,'getLogin'])->name('getLogin');
Route::post('/admin/login', [AuthController::class,'postLogin'])->name('postLogin');
Route::group(['middleware' => 'disable_back_btn'], function () {
Route::group(['middleware'=>['admin_auth']],function(){

Route::get('/admin/dashboard', [ProfileController::class,'dashboard'])->name('dashboard');
Route::get('/admin/users', [UserController::class,'index'])->name('users.index');
Route::get('/admin/logout', [ProfileController::class,'logout'])->name('logout');
Route::get('/registration', [RegistrationController::class,'registration'])->name('registration');
Route::post('/create', [RegistrationController::class,'create'])->name('create');
Route::get('/admin/userlist', [ProfileController::class,'userlist'])->name('userlist');
Route::get('/admin/usereditshow/{id}', [ProfileController::class,'usereditshow'])->name('usereditshow');
Route::post('/admin/useredit/{id}', [ProfileController::class,'useredit'])->name('useredit');
Route::get('/admin/userdelete/{id}', [ProfileController::class,'userdelete'])->name('userdelete');
});
});
