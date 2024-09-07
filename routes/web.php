<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [MainController::class, 'loginPage'])->name('login');
Route::post('/login', [MainController::class, 'loginInsert']);
Route::get('/register', [MainController::class, 'registerPage']);
Route::post('/register', [MainController::class, 'registerInsert']);
Route::post('/logout', [MainController::class, 'logout']);


Route::get('/', [MainController::class, 'dashboard'])->name('dashboard-page');

Route::middleware(['auth'])->group(function () {
    Route::get('/rent', [MainController::class, 'rentPage'])->name('rent-page');
    Route::post('/rent', [MainController::class, 'insertRent']);

    Route::middleware(('admin'))->group(function (){
        Route::get('/data', [AdminController::class, 'all_data'])->name('all_data-page');
        Route::post('/delete-rent', [AdminController::class, 'deleteRent']);
        Route::get('/update-page', [AdminController::class, 'updatePage']);
        Route::post('/update-rent', [AdminController::class, 'updateRent']);
    });
});
