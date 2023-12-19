<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaleshistoryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// routes/web.php



Route::get('/', [SaleshistoryController::class,'sellshistory'])->name('sellshistory');
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
Route::get('/stock/{id}/edit', [StockController::class, 'edit'])->name('stock.edit');
Route::put('/stock/{id}', [StockController::class, 'update'])->name('stock.update');
Route::delete('/stock/{id}', [StockController::class, 'destroy'])->name('stock.destroy');

//Make Sell
Route::get('/stock/{id}/sell', [StockController::class, 'sellForm'])->name('stock.sellForm');
Route::post('/stock/{id}/sell', [StockController::class, 'sell'])->name('stock.sell');

Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
Route::post('/stock', [StockController::class, 'store'])->name('stock.store');

Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
