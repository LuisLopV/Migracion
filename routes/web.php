<?php
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BarracksController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\SoliderController;
use App\Models\Solider;
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

Route::get('Soldado', [SoliderController::class,'create'])->name('mostrarSoldado');
Route::post('soldado-store', [SoliderController::class,'store'])->name('storeSoldado');

Route::get('Cuartel', [BarracksController::class,'create'])->name('mostrarCuartel');
Route::post('cuartel-store', [BarracksController::class,'store'])->name('storeCuartel');

Route::get('Cuerpo', [BodyController::class,'create'])->name('mostrarCuerpo');
Route::post('cuerpo-store', [BodyController::class,'store'])->name('storeCuerpo');

Route::get('Compañia', [CompanyController::class,'create'])->name('mostrarCompañia');
Route::post('compañia-store', [CompanyController::class,'store'])->name('storeCompañia');