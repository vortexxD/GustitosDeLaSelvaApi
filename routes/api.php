<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customerController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\supplierController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', function(){
    return 'Moris Pendeja';
});

// Customers
Route::get('/customers', [customerController::class, 'index']);
Route::post('/customer/store', [customerController::class, 'store']);
Route::get('/customer/show/{id}', [customerController::class, 'show']);
Route::put('/customer/update/{id}', [customerController::class, 'update']);
Route::patch('/customer/update/{id}', [customerController::class, 'updatePartial']);
Route::delete('/customer/destroy/{id}', [customerController::class, 'destroy']);
Route::get('/customer/search', [customerController::class, 'search']);

// ExtraOrders
//Route::get('', [customerController::class, 'index']);

// Invoice
Route::get('/invoices', [invoiceController::class, 'index']);

// Orders
Route::get('/orders', [orderController::class, 'index']);

// Products
Route::get('/products', [productController::class, 'index']);

// RawMaterials
//Route::get('', [customerController::class, 'index']);

// Suppliers
Route::get('/suppliers', [supplierController::class, 'index']);

// SupplierDetails
//Route::get('', [customerController::class, 'index']);

// Users

