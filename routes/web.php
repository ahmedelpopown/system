<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\home;
use App\Http\Controllers\MinProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [home::class, 'index'])->name('home');
Route::resource('product', ProductController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('sales', SaleController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('min_product', MinProductController::class);
Route::delete('/products/bulk-delete', [ProductController::class, 'bulkDelete'])->name('products.bulkDelete');
