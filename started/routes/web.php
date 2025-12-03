<?php
use App\Http\Controllers\Frontend\Frontendcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', [Frontendcontroller::class, 'index']);


Route::get('/admin/login', [AdminController::class, 'adminlogin']);

Route::post('/admin/login', [AdminController::class, 'adminloginform'])->name('admin.login');

// Admin dashboard route (handled by controller)
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Category Routes
Route::get('/category/add', [CategoryController::class, 'addCategory'])->name('category.add');
Route::post('/category/store', [CategoryController::class, 'storeCategory'])->name('category.store');
Route::get('/category/manage', [CategoryController::class, 'manageCategory'])->name('category.manage');