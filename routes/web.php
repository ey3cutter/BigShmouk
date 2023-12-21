<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\ClientOrderController;
use App\Http\Controllers\EquipmentOrderController;

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
return [
    Route::get('', [HomeController::class, 'index'])->name('welcome'),

    Route::get('login',[AuthController::class,'index'])->name('auth.login'),
    Route::post('login',[AuthController::class,'login'])->name('auth.login'),

    Route::get('register',[AuthController::class,'register_view'])->name('auth.register'),
    Route::post('register',[AuthController::class,'register'])->name('auth.register'),

    Route::get('home',[AuthController::class,'home'])->name('app.home'),
    Route::get('logout',[AuthController::class,'logout'])->name('logout'),

    Route::get('/service', [ServiceController::class, 'index'])->name('service.index'),
    Route::get('/service-create', [ServiceController::class, 'create'])->name('service.create'),
    Route::post('/service-store', [ServiceController::class, 'store'])->name('service.store'),
    Route::get('/service-{service}', [ServiceController::class, 'show'])->name('service.show'),
    Route::delete('/service-{service}', [ServiceController::class, 'destroy'])->name('service.delete'),

    Route::get('/equipment', [EquipmentController::class, 'index'])->name('equipment.index'),
    Route::get('/equipment-create', [EquipmentController::class, 'create'])->name('equipment.create'),
    Route::post('/equipment-store', [EquipmentController::class, 'store'])->name('equipment.store'),
    Route::get('/equipment-{equipment}', [EquipmentController::class, 'show'])->name('equipment.show'),
    Route::delete('/equipment-{equipment}', [EquipmentController::class, 'destroy'])->name('equipment.delete'),

    Route::patch('/management-{management}-hire', [ManagementController::class, 'hire'])->name('management.hire'),
    Route::get('/management', [ManagementController::class, 'index'])->name('management.index'),
    Route::get('/management-{management}-edit', [ManagementController::class, 'edit'])->name('management.edit'),
    Route::get('/management-{management}', [ManagementController::class, 'show'])->name('management.show'),

    Route::patch('/clientorder-{clientorder}-accept', [ClientOrderController::class, 'accept'])->name('co.accept'),
    Route::get('/clientorder-{clientorder}-edit', [ClientOrderController::class, 'edit'])->name('co.edit'),
    Route::get('/clientorder', [ClientOrderController::class, 'index'])->name('co.index'),
    Route::get('/clientorder-create', [ClientOrderController::class, 'createCO'])->name('co.create'),
    Route::post('/clientorder-store', [ClientOrderController::class, 'store'])->name('co.store'),
    Route::get('/clientorder-{clientorder}', [ClientOrderController::class, 'show'])->name('co.show'),
    
    Route::get('/equipmentorder', [EquipmentOrderController::class, 'index'])->name('eo.index'),
    Route::get('/equipmentorder-create', [EquipmentOrderController::class, 'createEO'])->name('eo.create'),
    Route::post('/equipmentorder-store', [EquipmentOrderController::class, 'store'])->name('eo.store'),
    Route::get('/equipmentorder-{equipmentorder}', [EquipmentOrderController::class, 'show'])->name('eo.show'),
];
