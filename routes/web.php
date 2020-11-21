<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SettingsController;

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
Route::get('/', [FrontController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/services', ServicesController::class);
Route::resource('/dashboard/about', AboutController::class);
Route::resource('/dashboard/top', TopController::class);
Route::resource('/dashboard/portfolio', PortfolioController::class);
Route::resource('/dashboard/team', TeamController::class);
Route::resource('/dashboard/category', CategoryController::class);
Route::resource('/dashboard/clients', ClientsController::class);
Route::resource('/dashboard/settings', SettingsController::class);