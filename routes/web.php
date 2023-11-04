<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SuppliersController;
use App\Models\Sale;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard') ->middleware(['auth', 'admin']);

Route::get('/home', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}) ->middleware(['auth', 'admin']);

require __DIR__.'/auth.php';



Route::resource('suppliers', SuppliersController::class)->middleware(['auth', 'admin']);
Route::resource('employee', EmployeeController::class)->middleware(['auth', 'admin']);
Route::resource('customer', CustomerController::class)->middleware(['auth', 'admin']);
Route::resource('product', ProductController::class)->middleware(['auth', 'admin']);
Route::resource('purchase', PurchaseController::class)->middleware(['auth', 'admin']);
// Route::put('suppliers/{supplier}', 'SuppliersController@update')->name('suppliers.update');

Route::resource('sale', SaleController::class);