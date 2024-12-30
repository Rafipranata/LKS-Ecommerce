<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;


Route::resource('category', CategoryController::class);
Route::resource('produk', ProdukController::class);
Route::resource('customer', CustomerController::class);