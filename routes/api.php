<?php

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('employee', EmployeeController::class);
Route::get('/employees/{status?}', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('employees/{employee}/delete', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::post('employees/{employee}/restore', [EmployeeController::class, 'restore'])->name('employee.restore');
Route::post('/employees/restore-all', [EmployeeController::class, 'restoreAll'])->name('employee.restore-all');