<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockTableController;
use App\Http\Controllers\RecieptController;
use App\Http\Controllers\ItemCategoryController;
use App\Http\Controllers\ResProductController;
use App\Http\Controllers\ResSectionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ResCategoryController;
use App\Http\Controllers\ResSalesTableController;
use App\Http\Controllers\StockDischargeController;
use App\Http\Controllers\RestaurantRequisitionsController;

//Business Procurement 
use App\Http\Controllers\PaymentTypesController;
use App\Http\Controllers\TaxRatesController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cafeDashboard', [HomeController::class, 'cafeDashboard'])->name('cafeDashboard');
Route::get('/userDashboard', [HomeController::class, 'userDashboard'])->name('userDashboard');

Route::get('/sql', 'Products@index');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('users', UserController::class);
        Route::resource('stock-tables', StockTableController::class);
        Route::resource('res-sales-tables', ResSalesTableController::class);

        //custome routes
        Route::get('/res-products/pointOfsale', [ResProductController::class, 'pointOfsale'])->name('res-products.pointOfsale');
        Route::post('/res-products/pointOfsale', [ResProductController::class, 'pointOfsale'])->name('res-products.pointOfsale');
        Route::get('/res-products/dailyLogs', [ResProductController::class, 'dailyLogs'])->name('res-products.dailyLogs');
        Route::resource('res-products', ResProductController::class);
        Route::resource('res-sections', ResSectionController::class);

        Route::get('/stock-discharges/stockLevels', [StockDischargeController::class, 'stockLevels'])->name('stock-discharges.stockLevels');
        Route::resource('stock-discharges', StockDischargeController::class);
        Route::resource('res-categories', ResCategoryController::class);



        Route::resource('reciepts', RecieptController::class);
        Route::post('store-form', [RecieptController::class, 'insert']);
        Route::resource('item-categories', ItemCategoryController::class);

        Route::resource('all-payment-types', PaymentTypesController::class);
        Route::resource('all-tax-rates', TaxRatesController::class);
        Route::resource('restaurant-requisitions', RestaurantRequisitionsController::class);
    });