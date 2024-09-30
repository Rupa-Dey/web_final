<?php

use App\Http\Controllers\EmployeeinfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[EmployeeinfoController::class, 'index'])->name('employees.index');
Route::post('/delete/{id}',[EmployeeinfoController::class, 'destroy'])->name('employees.destroy');
Route::get('/show/{id}',[EmployeeinfoController::class, 'show'])->name('employees.show');
Route::get('/search',[EmployeeinfoController::class, 'search'])->name('employees.search');
Route::get('/insert',[EmployeeinfoController::class, 'create'])->name('employees.create');
Route::post('/store',[EmployeeinfoController::class, 'store'])->name('employees.store');