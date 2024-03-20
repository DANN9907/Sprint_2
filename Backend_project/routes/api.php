<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\PurchasesController;
use Illuminate\Support\Facades\Route;

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


#RUTA PARA USERS 
/*Este metodo permite hacer las operaciones crud sin tener que 
especificar los metodos de conexion simplemente se utiliza
la tabla y el controlador 

*/
Route::resource('users',UsersController::class);
#RUTA PARA SALES 
Route::resource('sales',SalesController::class);
#RUTA PARA PRODUCT
Route::resource('product',ProductsController::class);
#RUTA PARA INVENTORY
Route::resource('inventory',InventoriesController::class);
#RUTA PARA PURCHASE
Route::resource('purchase',PurchasesController::class);

