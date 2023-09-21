<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('/car-home',[HomeController::class, 'carhome']);
Route::get('/bike-home',[HomeController::class, 'bikehome']);
Route::get('/about-us',[HomeController::class, 'about']);
Route::get('/contact-us',[HomeController::class, 'contact']);
Route::post('/contact-us-store',[HomeController::class, 'contactstore']);
Route::get('/brand',[HomeController::class, 'brand']);
Route::get('/inventory-list',[HomeController::class, 'listinventory']);


Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerstore',[AuthController::class, 'registerstore'])->name('registerstore');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/loginstore',[AuthController::class, 'loginstore'])->name('loginstore');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');





Route::get('/dashboard',[AdminController::class, 'Dashboard'])->middleware('auth');

Route::get('/dashboard/fuel-list',[AdminController::class, 'fuellist']);
Route::get('/dashboard/fuel-add',[AdminController::class, 'fueladd']);
Route::post('/dashboard/fuel-add-store',[AdminController::class, 'fuelstore']);
Route::get('/dashboard/fuel-edit/{id}',[AdminController::class, 'fueledit']);
Route::post('/dashboard/fuel-update/{id}',[AdminController::class, 'fuelupdate']);
Route::get('/dashboard/fuel-delete/{id}',[AdminController::class, 'fueldelete']);
Route::get('/dashboard/brand-list',[AdminController::class, 'brandlist']);
Route::get('/dashboard/brand-add',[AdminController::class, 'brandadd']);
Route::post('/dashboard/brand-store',[AdminController::class, 'brandstore']);
Route::get('/dashboard/brand-edit/{id}',[AdminController::class, 'brandedit']);
Route::post('/dashboard/brand-update/{id}',[AdminController::class, 'brandupdate']);
Route::get('/dashboard/brand-delete/{id}',[AdminController::class, 'branddelete']);
Route::get('/dashboard/model-list',[AdminController::class, 'modellist']);
Route::get('/dashboard/model-add',[AdminController::class, 'modeladd']);
Route::post('/dashboard/model-store',[AdminController::class, 'modelstore']);
Route::get('/dashboard/model-edit/{id}',[AdminController::class, 'modeledit']);
Route::post('/dashboard/model-update/{id}',[AdminController::class, 'modelupdate']);
Route::get('/dashboard/model-delete/{id}',[AdminController::class, 'modeldelete']);
Route::get('/dashboard/body-type-list',[AdminController::class, 'bodytypelist']);
Route::get('/dashboard/body-type-add',[AdminController::class, 'bodytypeadd']);
Route::post('/dashboard/body-type-store',[AdminController::class, 'bodytypestore']);
Route::get('/dashboard/body-type-edit/{id}',[AdminController::class, 'bodytypeedit']);
Route::post('/dashboard/body-type-update/{id}',[AdminController::class, 'bodytypeupdate']);
Route::get('/dashboard/body-type-delete/{id}',[AdminController::class, 'bodytypedelete']);
Route::get('/dashboard/vehicle-type-list',[AdminController::class, 'vehicletypelist']);
Route::get('/dashboard/vehicle-type-add',[AdminController::class, 'vehicletypeadd']);
Route::post('/dashboard/vehicle-type-store',[AdminController::class, 'vehicletypestore']);
Route::get('/dashboard/vehicle-type-edit/{id}',[AdminController::class, 'vehicletypeedit']);
Route::post('/dashboard/vehicle-type-update/{id}',[AdminController::class, 'vehicletypeupdate']);
Route::get('/dashboard/vehicle-type-delete/{id}',[AdminController::class, 'vehicletypdelete']);
Route::get('/dashboard/color-list',[AdminController::class, 'colorlist']);
Route::get('/dashboard/color-add',[AdminController::class, 'coloradd']);
Route::post('/dashboard/color-store',[AdminController::class, 'colorstore']);
Route::get('/dashboard/color-edit/{id}',[AdminController::class, 'coloredit']);
Route::post('/dashboard/color-update/{id}',[AdminController::class, 'colorupdate']);
Route::get('/dashboard/color-delete/{id}',[AdminController::class, 'colordelete']);
Route::get('/dashboard/vehicle-list',[AdminController::class, 'vehiclelist']);
Route::get('/dashboard/vehicle-add',[AdminController::class, 'vehicleadd']);
Route::post('/dashboard/vehicle-store',[AdminController::class, 'vehiclestore']);
Route::get('/dashboard/vehicle-edit/{id}',[AdminController::class, 'vehicleedit']);
Route::post('/dashboard/vehicle-update/{id}',[AdminController::class, 'vehicleupdate']);
Route::get('/dashboard/vehicle-delete/{id}',[AdminController::class, 'vehicledelete']);

Route::get('/dashboard/contact-users',[AdminController::class, 'contactusers']);


