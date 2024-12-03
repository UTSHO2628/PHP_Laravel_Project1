<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ['message' => 'Welcome to Employee Management System']);
});
//employee/{name
Route::get('/employee/{name}', function ($name) {
    return "Hello, $name. Welcome to the Employee Management System!";
});

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees', [EmployeeController::class, 'store']);

Route::get('/employee/{id}/details', [EmployeeController::class, 'show']);




