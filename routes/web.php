<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/userlist', [App\Http\Controllers\MessageController::class, 'user_list'])->name('user.list');
Route::get('/usermessage/{id}', [App\Http\Controllers\MessageController::class, 'user_message'])->name('user.message');
Route::post('/sendmessage', [App\Http\Controllers\MessageController::class, 'send_message'])->name('user.message.send');
Route::get('/deletesinglemessage/{id}', [App\Http\Controllers\MessageController::class, 'delete_single_message'])->name('user.message.delete.single');
Route::get('/deleteallmessage/{id}', [App\Http\Controllers\MessageController::class, 'delete_all_message'])->name('user.message.delete.all');
