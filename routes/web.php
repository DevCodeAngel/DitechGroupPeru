<?php

use App\Http\Controllers\administratorController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Rutas protegidas
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin-profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/admin-profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Ruta para mostrar la vista de productos
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');

// Ruta para almacenar los productos - debe ser POST
Route::post('/productos-store', [ProductosController::class, 'store'])->name('productos.store');

Route::post('/categorias-store', [CategoriasController::class, 'store'])->name('categorias.store');

Route::get('/admin-ditech', [administratorController::class, 'dashboard'])->name('admin-ditech');

Route::post('/productos-search', [ProductosController::class, 'search'])->name('productos.search');
