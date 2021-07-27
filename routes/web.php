<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PegawaiController;
use App\Http\Controller\MenuController;
use App\Http\Controller\TransaksiController;

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

Route::middleware(['web', 'auth'])->group(function () {

    Route::middleware(['Admin'])->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/', [PegawaiController::class, 'show'])->name('user');
            Route::get('create', [PegawaiController::class, 'create'])->name('create_user');            
            Route::post('store', [PegawaiController::class, 'store'])->name('store_user');
            Route::get('edit/{id}', [PegawaiController::class, 'edit'])->name('edit_user');
            Route::patch('update/{id}', [PegawaiController::class, 'update'])->name('update_user');
            Route::delete('delete/{id}', [PegawaiController::class, 'destroy'])->name('destroy_user');            
        });

        Route::prefix('menu')->group(function () {
            Route::get('/', [MenuController::class, 'show'])->name('menu');
            Route::get('create', [MenuController::class, 'create'])->name('create_menu');            
            Route::post('store', [MenuController::class, 'storeMenu'])->name('store_menu');
            Route::get('edit/{id}', [MenuController::class, 'editMenu'])->name('edit_menu');
            Route::patch('update/{id}', [MenuController::class, 'updateMenu'])->name('update_menu');
            Route::delete('delete/{id}', [MenuController::class, 'destroyMenu'])->name('destroy_menu');            
        });        

        Route::prefix('kuah')->group(function () {
            Route::post('store', [MenuController::class, 'storeKuah'])->name('store_kuah');
            Route::get('edit/{id}', [MenuController::class, 'editKuah'])->name('edit_kuah');
            Route::patch('update/{id}', [MenuController::class, 'updateKuah'])->name('update_kuah');
            Route::delete('delete/{id}', [MenuController::class, 'destroyKuah'])->name('destroy_kuah');            
        });
    });
});

