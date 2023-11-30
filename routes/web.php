<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObjectsController;
use App\Http\Controllers\ServicesController;
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

Route::controller(HomeController::class)->group(function () {
   Route::prefix('/')->group(function () {
       Route::get('/', 'index');
   });
});

Route::controller(ContactsController::class)->group(function () {
    Route::prefix('/contacts')->group(function () {
        Route::get('/', 'index');
    });
});

Route::controller(AboutController::class)->group(function () {
    Route::prefix('/about')->group(function () {
        Route::get('/', 'index');
    });
});

Route::controller(ObjectsController::class)->group(function () {
    Route::prefix('/objects')->group(function () {
        Route::get('/', 'index');
        Route::get('/show/{id}', 'single');
    });
});

Route::controller(ServicesController::class)->group(function () {
    Route::prefix('/services')->group(function () {
        Route::get('/', 'index');
        Route::get('/show/{id}', 'single');
        Route::get('/transport', 'transport');
    });
});
