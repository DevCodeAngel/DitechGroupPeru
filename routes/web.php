<?php

use App\Http\Controllers\administratorController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;


        

Route::get('/', [PageController::class, 'index'])->name('index');

// Ruta para mostrar la vista de productos
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');

// Ruta para almacenar los productos - debe ser POST
Route::post('/productos-store', [ProductosController::class, 'store'])->name('productos.store');


Route::post('/categorias-store', [CategoriasController::class, 'store'])->name('categorias.store');


Route::get('/admin-ditech', [administratorController::class, 'dashboard'])->name('admin-ditech');


