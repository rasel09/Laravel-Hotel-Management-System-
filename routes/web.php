<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoomTypeController;

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

//  ------------------------------ Admin Route -----------------------

Route::get('admin', [AdminController::class, 'home'])->name('admin.home');
//  ----------------------------------- RoomType Route -------------------
Route::prefix('roomType')->group(function () {
    Route::get('/', [RoomTypeController::class, 'index'])->name('roomtype.index');
});