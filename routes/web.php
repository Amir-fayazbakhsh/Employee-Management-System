<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\Admins\adminsController;
use App\Http\Controllers\systemManage\DepartmentController;
use App\Http\Controllers\systemManage\SalaryController;
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

Route::get('/',[dashbordController::class,'index']);

Route::get('/login',[loginController::class,'index'])->name('login');
Route::post('/login',[loginController::class,'login']);

//log out 
Route::get('/logout',[logoutController::class,'logout'])->name('logout');


//admins
Route::get('/admins',[adminsController::class,'index'])->name('admins/index');
Route::post('/admins',[adminsController::class,'create'])->name('create/admin');
Route::view('/admins-create','admins.create')->middleware('auth');
Route::delete('/admins/{user}/delete',[adminsController::class,'delete'])->name('admin/delete');
// Route::post('/admins/{user}/update',[adminsController::class,'update'])->name('admin/update');
Route::get('/admins/{user}/update',[adminsController::class,'details'])->name('admin/update');
Route::post('/update/{user}/admins',[adminsController::class,'update'])->name('update/admin');



////departments
Route::get('/Departments',[DepartmentController::class,'index'])->name('departments/index');
Route::view('/Departments-create','sys-mg.department.create');
Route::post('/Departments',[DepartmentController::class,'create'])->name('create/departments');
Route::delete('/department/{id}/delete',[DepartmentController::class,'delete'])->name('department/delete');
Route::get('/department/{id}/update',[DepartmentController::class,'details'])->name('department/datails');
Route::put('/department/{id}/update',[DepartmentController::class,'update'])->name('department/update');

Route::get('/Salary',[SalaryController::class,'index'])->name('salary/index');



