<?php
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerOrdersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Public Routes


Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
//Route::get('/products',[ProductController::class,'index']);
//Protected routes
Route::group(['middleware'=>['auth:sanctum']],function(){

    Route::post('/products',[ProductController::class, 'store']);
    Route::get('/products',[ProductController::class, 'index']);
    Route::get('/products/{id}',[ProductController::class, 'show']);
    Route::get('/products/search/{name}',[ProductController::class,'search']);
    Route::put('/products/{id}',[ProductController::class, 'update']);
    Route::delete('/products/{id}',[ProductController::class, 'destroy']);
    Route::get('/orders',[CustomerOrdersController::class, 'index']);
    Route::get('/orders/{id}',[CustomerOrdersController::class, 'show']);
    Route::post('/orders',[CustomerOrdersController::class, 'store']);
    Route::put('/orders/{id}',[CustomerOrdersController::class, 'update']);
    Route::get('/orders/search/{name}',[CustomerOrdersController::class,'search']);
    Route::delete('/orders/{id}',[CustomerOrdersController::class, 'destroy']);
    Route::post('/logout',[CustomerOrdersController::class, 'logout']);
    
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
