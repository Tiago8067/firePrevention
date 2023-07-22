<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FluidController;
use App\Http\Controllers\VehicleController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/login', [AuthController::class, 'index'])->name('index');
Route::post('/admin/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
/* Route::get('/admin/login', [AuthController::class, 'handleLogout'])->name('handleLogout'); */

Route::get('/home', [HomeController::class, 'index'])->name('index.home');

Route::get('/tables/users/trash', [EmployeeController::class, 'trashed'])->name('users.trashed');
Route::resource('/tables/users', EmployeeController::class);

Route::get('/tables/vehicles/trash', [VehicleController::class, 'trashed'])->name('vehicles.trashed');
Route::resource('/tables/vehicles', VehicleController::class);

Route::get('/tables/fluids/trash', [FluidController::class, 'trashed'])->name('fluids.trashed');
Route::resource('/tables/fluids', FluidController::class);
