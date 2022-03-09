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
Route::prefix('admin')->group(function () {
    Route::get('/roomType', [RoomTypeController::class, 'index'])->name('roomtype.index');
    Route::get('/roomType/create', [RoomTypeController::class, 'create'])->name('roomtype.create');
    Route::post('/roomType/store', [RoomTypeController::class, 'store'])->name('roomtype.store');
    Route::get('/roomType/show/{id}', [RoomTypeController::class, 'show'])->name('roomtype.show');
    Route::get('/roomType/edit/{id}', [RoomTypeController::class, 'edit'])->name('roomtype.edit');
    Route::put('/roomType/update/{id}', [RoomTypeController::class, 'update'])->name('roomtype.update');
    Route::delete('/roomType/destroy/{id}', [RoomTypeController::class, 'destroy'])->name('roomtype.destroy');
});