<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\County;
use App\Http\Livewire\SubCounty;
use App\Http\Livewire\Town;
use App\Models\County as ModelsCounty;

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

Route::get('/', function () {
    return view('welcome');
});
//RoleController->all()
//RoleControler::class-App\Http\Controllers\RoleController
//Route::get('role/all',[RoleController::class,'all']);
Route::get('roles',[RoleController::class,'all']);
Route::get('role/add',[RoleController::class,'add']);
Route::get('role/edit/{$id}',[RoleController::class,'edit']);
Route::get('role/save',[RoleController::class,'save']);
Route::get('role/saveChanges/{$id}',[RoleController::class,'saveChanges']);
Route::get('role/delete/{id}',[RoleController::class,'delete']);

/*UserControler::class-App\Http\Controllers\UserController
Route::get('user/all',[UserController::class,'all']);
Route::get('users',[UserController::class,'all']);
Route::get('user/add',[UserController::class,'add']);
Route::get('user/edit',[UserController::class,'edit']);
Route::get('user/save',[UserController::class,'save']);
Route::get('user/saveChanges',[UserController::class,'saveChanges']);
Route::get('user/delete/{id}',[UserController::class,'delete']);

//DesignControler::class-App\Http\Controllers\DesignController
Route::get('design/all',[DesignController::class,'all']);
Route::get('designs',[DesignController::class,'all']);
Route::get('design/add',[DesignController::class,'add']);
Route::get('design/edit',[DesignController::class,'edit']);
Route::get('design/save',[DesignController::class,'save']);
Route::get('design/saveChanges',[DesignController::class,'saveChanges']);
Route::get('design/delete/{id}',[DesignController::class,'delete']);
*/
//county
Route::get('counties',County::class);

//SubCounty
Route::get('subcounties',SubCounty::class);
Route::post('fetch-subcounties',[AjaxController::class,'getSubCounties']);

//Town
Route::get('towns',Town::class);
Route::post('fetch-towns',[AjaxController::class,'getTowns']);

Route::post('authRegister',[UserController::class,'authRegister']);
//Users
Route::get('users',[UserController::class,'all']);
Route::get('login',[UserController::class,'login']);
Route::get('register',[UserController::class,'register']);