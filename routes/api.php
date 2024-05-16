<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::middleware('auth:sanctum')->get('/users', [EmployeeController::class, 'index']);
//Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('login', [RegisterController::class, 'login']);
Route::get('logout', [RegisterController::class,'logout']);

Route::middleware('auth:api')->group( function () {
    Route::resource('employees', EmployeeController::class);
    Route::get('employee-list', [EmployeeController::class,'employeeDetails']);
    Route::post('add-employee', [EmployeeController::class,'addEmployee']);
});


