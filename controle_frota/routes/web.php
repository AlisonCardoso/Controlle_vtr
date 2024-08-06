<?php
use App\Http\Controllers\ContaController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\SubCommandController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resources(['contas'=> ContaController::class]);

//Route::resources(['customers'=> CustomerController::class]);
    Route::resources(['workshops'=> WorkshopController::class]);
   // Route::resources(['categories'=> CategoryController::class]);
 //   Route::resources(['products'=> ProductController::class]);
    Route::resources(['cities'=> CityController ::class]);
    Route::resources(['states'=> StateController ::class]);
  //  Route::resources(['vehicles'=> VehicleController ::class]);
    Route::resources(['subcommands'=> SubCommandController ::class]);


    Route::group(['prefix' => 'admin/users'], function () {
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/add', [UserController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::post('/delete', [UserController::class, 'destroy'])->name('users.delete');
    });

   // Route::resources(['users'=> UserController ::class]);
/*
Route::get('/contas/{id}/edit', [ContaController::class, 'contas.edit']);
Route::post('/contas/{id}/update', [ContaController::class, 'contas.update']);
Route::get('/contas/{id}/show', [ContaController::class, 'contas.show']);
Route::get('/contas/{id}/create', [ContaController::class, 'contas.create']);
Route::post('/contas/{id}/store', [ContaController::class, 'contas.store']);
Route::get('/contas/{id}/index', [ContaController::class, 'contas.index']);
Route::get('/contas/{id}/edit', [ContaController::class, 'contas.edit']);
Route::get('/contas/{id}/destroy', [ContaController::class, 'contas.destroy']);

*/


Route::get('/change-situation-conta/{conta}', [ContaController::class, 'changeSituation'])->name('conta.change-situation');

Route::get('/gerar-pdf-conta', [ContaController::class, 'gerarPdf'])->name('conta.gerar-pdf');

Route::get('/gerar-csv-conta', [ContaController::class, 'gerarCsv'])->name('conta.gerar-csv');

Route::get('/gerar-word-conta', [ContaController::class, 'gerarWord'])->name('conta.gerar-word');
