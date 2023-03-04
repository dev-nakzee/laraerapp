<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return redirect('https://xeniuminfotech.in/');
});

Route::get('/admin', function () {
    return redirect()->route('hrms.position.index');
});
// HRMS Routes
// Positions Routes
Route::get('/hrms/positions', 'PositionsController@index')->name('hrms.position.index');


// Employee Routes
Route::get('/hrms/employees', 'EmployeesController@index')->name('hrms.employees.index');

//
Route::get('/hrms/positions', 'PositionsController@index')->name('hrms.position.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
