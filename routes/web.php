<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SidebarController;

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
Route::get('/master',[MainController::class,'master']);
Route::get('/Home',[MainController::class,'content']);
Route::get('/admin',[SidebarController::class,'admin']);//admin
//start admin create
Route::get('/admin-create',[SidebarController::class,'admin_create'])->name('admin-create');
//end admin create

Route::get('/customer',[SidebarController::class,'customer']);
Route::get('/Product',[SidebarController::class,'product']);
Route::get('/category',[SidebarController::class,'category']);
Route::get('/Men',[SidebarController::class,'Men']);
Route::get('/Women',[SidebarController::class,'woMen']);
Route::get('/kids',[SidebarController::class,'kids']);
Route::get('/food',[SidebarController::class,'food']);
Route::get('/drink',[SidebarController::class,'drink']);


Route::get('/seller-page',[SidebarController::class,'seller'])->name('seller');


Route::get('/cart',[SidebarController::class,'cart'])->name('page.cart');

Route::get('/orderdetails',[SidebarController::class,'details'])->name('page.details');

Route::get('/order',[SidebarController::class,'order'])->name('page.order');

Route::get('/payment',[SidebarController::class,'payment'])->name('page.payment');

Route::get('/supplier',[SidebarController::class,'supplier'])->name('page.supplier');