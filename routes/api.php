<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\customerController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\extraOrderController;
use App\Http\Controllers\orderDetailController;
use App\Http\Controllers\rawMaterialController;
use App\Http\Controllers\userController;
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

// Auth
Route::middleware('auth:sanctum')->post('/login', [userController::class, 'store']);

// Customers
Route::get('/customers', [customerController::class, 'index']);
Route::post('/customer/store', [customerController::class, 'store']);
Route::get('/customer/show/{id}', [customerController::class, 'show']);
Route::put('/customer/update/{id}', [customerController::class, 'update']);
Route::patch('/customer/update/{id}', [customerController::class, 'updatePartial']);
Route::delete('/customer/destroy/{id}', [customerController::class, 'destroy']);
Route::get('/customer/search', [customerController::class, 'search']);

// ExtraOrders
Route::get('/extraOrders', [extraOrderController::class, 'index']);
Route::post('/extraOrder/store', [extraOrderController::class, 'store']);
Route::get('/extraOrder/show/{id}', [extraOrderController::class, 'show']);
Route::put('/extraOrder/update/{id}', [extraOrderController::class, 'update']);
Route::patch('/extraOrder/update/{id}', [extraOrderController::class, 'updatePartial']);
Route::delete('/extraOrder/destroy/{id}', [extraOrderController::class, 'destroy']);
Route::get('/extraOrder/search', [extraOrderController::class, 'search']);

// Invoice
Route::get('/invoices', [invoiceController::class, 'index']);
Route::post('/invoice/store', [invoiceController::class, 'store']);
Route::get('/invoice/show/{id}', [invoiceController::class, 'show']);
Route::put('/invoice/update/{id}', [invoiceController::class, 'update']);
Route::patch('/invoice/update/{id}', [invoiceController::class, 'updatePartial']);
Route::delete('/invoice/destroy/{id}', [invoiceController::class, 'destroy']);
Route::get('/invoice/search', [invoiceController::class, 'search']);

// Orders
Route::get('/orders', [orderController::class, 'index']);
Route::post('/order/store', [orderController::class, 'store']);
Route::get('/order/show/{id}', [orderController::class, 'show']);
Route::put('/order/update/{id}', [orderController::class, 'update']);
Route::patch('/order/update/{id}', [orderController::class, 'updatePartial']);
Route::delete('/order/destroy/{id}', [orderController::class, 'destroy']);
Route::get('/order/search', [orderController::class, 'search']);

// Products
Route::get('/products', [productController::class, 'index']);
Route::post('/product/store', [productController::class, 'store']);
Route::get('/product/show/{id}', [productController::class, 'show']);
Route::put('/product/update/{id}', [productController::class, 'update']);
Route::patch('/product/update/{id}', [productController::class, 'updatePartial']);
Route::delete('/product/destroy/{id}', [productController::class, 'destroy']);
Route::get('/product/search', [productController::class, 'search']);

// RawMaterials
Route::get('/rawMaterials', [rawMaterialController::class, 'index']);
Route::post('/rawMaterial/store', [rawMaterialController::class, 'store']);
Route::get('/rawMaterial/show/{id}', [rawMaterialController::class, 'show']);
Route::put('/rawMaterial/update/{id}', [rawMaterialController::class, 'update']);
Route::patch('/rawMaterial/update/{id}', [rawMaterialController::class, 'updatePartial']);
Route::delete('/rawMaterial/destroy/{id}', [rawMaterialController::class, 'destroy']);
Route::get('/rawMaterial/search', [rawMaterialController::class, 'search']);


// Suppliers
Route::get('/suppliers', [supplierController::class, 'index']);
Route::post('/supplier/store', [supplierController::class, 'store']);
Route::get('/supplier/show/{id}', [supplierController::class, 'show']);
Route::put('/supplier/update/{id}', [supplierController::class, 'update']);
Route::patch('/supplier/update/{id}', [supplierController::class, 'updatePartial']);
Route::delete('/supplier/destroy/{id}', [supplierController::class, 'destroy']);
Route::get('/supplier/search', [supplierController::class, 'search']);

// SupplierDetails
Route::get('/supplierDetails', [supplierDetailController::class, 'index']);
Route::post('/supplierDetail/store', [supplierDetailController::class, 'store']);
Route::get('/supplierDetail/show/{id}', [supplierDetailController::class, 'show']);
Route::put('/supplierDetail/update/{id}', [supplierDetailController::class, 'update']);
Route::patch('/supplierDetail/update/{id}', [supplierDetailController::class, 'updatePartial']);
Route::delete('/supplierDetail/destroy/{id}', [supplierDetailController::class, 'destroy']);
Route::get('/supplierDetail/search', [supplierDetailController::class, 'search']);

// Users
Route::middleware('auth:sanctum')->get('/users', [userController::class, 'index']);
Route::post('/user/store', [userController::class, 'store']);
Route::get('/user/show/{id}', [userController::class, 'show']);
Route::put('/user/update/{id}', [userController::class, 'update']);
Route::patch('/user/update/{id}', [userController::class, 'updatePartial']);
Route::delete('/user/destroy/{id}', [userController::class, 'destroy']);
Route::get('/user/search', [userController::class, 'search']);
