<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FluidController;
use App\Http\Controllers\InterventionController;
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

Route::get('/admin/login', [AuthController::class, 'index'])->name('login');
Route::post('/admin/login', [AuthController::class, 'handleLogin'])->name('handleLogin');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(["middleware" => "auth"], function() {

    Route::get('/home', [HomeController::class, 'index'])->name('index.home');
    
    Route::get('/tables/users/trash', [EmployeeController::class, 'trashed'])->name('users.trashed');
    Route::get('/tables/users/{id}/restore', [EmployeeController::class, 'restore'])->name('users.restore');
    Route::delete('/tables/users/{id}/force_delete', [EmployeeController::class, 'forceDelete'])->name('users.force_delete');
    Route::resource('/tables/users', EmployeeController::class);
    
    Route::get('/tables/vehicles/trash', [VehicleController::class, 'trashed'])->name('vehicles.trashed');
    Route::get('/tables/vehicles/{id}/restore', [VehicleController::class, 'restore'])->name('vehicles.restore');
    Route::delete('/tables/vehicles/{id}/force_delete', [VehicleController::class, 'forceDelete'])->name('vehicles.force_delete');
    Route::resource('/tables/vehicles', VehicleController::class);
    
    Route::get('/tables/fluids/trash', [FluidController::class, 'trashed'])->name('fluids.trashed');
    Route::get('/tables/fluids/{id}/restore', [FluidController::class, 'restore'])->name('fluids.restore');
    Route::delete('/tables/fluids/{id}/force_delete', [FluidController::class, 'forceDelete'])->name('fluids.force_delete');
    Route::resource('/tables/fluids', FluidController::class);
    
    Route::get('/tables/interventions/{id}/pdf-generator', [InterventionController::class, 'pdf_generator'])->name('interventions.pdf_generator');
    Route::get('/tables/interventions/{id}/create_invoice', [InterventionController::class, 'create_invoice'])->name('interventions.create_invoice');
    Route::post('/tables/interventions/{id}/store_invoice', [InterventionController::class, 'store_invoice'])->name('interventions.store_invoice');
    Route::get('/tables/interventions/{id}/fatura-pdf-generator', [InterventionController::class, 'faturaPdf_generator'])->name('interventions.faturaPdf_generator');
    Route::resource('/tables/interventions', InterventionController::class);

});
