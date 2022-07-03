<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\CreateCardController;
use App\Http\Controllers\ProductController;




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
//registration
Route::get('/',[AllUserController::class,'Registration'])->name('registration');
Route::post('/',[AllUserController::class,'registrationSubmitted'])->name('registration');

//login
Route::get('/login',[AllUserController::class,'login'])->name('login');
Route::post('/login',[AllUserController::class,'loginSubmitted'])->name('login');
Route::get('/logout',[AllUserController::class,'logout'])->name('logout');
Route::get('/Dashboard',[AllUserController::class,'adminDashboard'])->name('adminDashboard')->middleware('user');
Route::get('/vendorDashboard',[AllUserController::class,'vendorDashboard'])->name('vendorDashboard')->middleware('vendor');
Route::get('/StockedProducts',[CreateCardController::class,'show'])->name('StockedProducts')->middleware('vendor');
Route::get('/CreateCard',[CreateCardController::class,'CreateCard'])->name('CreateCard')->middleware('vendor');
Route::post('/CreateCard',[CreateCardController::class,'CreateCardSubmitted'])->name('CreateCard')->middleware('vendor');
Route::get('/cancel',[CreateCardController::class,'CancelFun'])->name('vendorDashboard')->middleware('vendor');

Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('mycart');
Route::post('/checkout',[ProductController::class,'checkout'])->middleware('vendor')->name('checkout');
