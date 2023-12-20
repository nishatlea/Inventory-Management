<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

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
    return view('home');
});
Route::prefix('brand')->group(function () {
    Route::get('/', [BrandController::class,'brands'])->name('brands');
    Route::post('/add-brand', [BrandController::class,'addBrand'])->name('add-brand');
    Route::put('/edit/{id}', [BrandController::class, 'updateBrand'])->name('brand.update.brand');
    Route::post('/delete-brand', [BrandController::class,'deleteBrand'])->name('delete-brand');
});
