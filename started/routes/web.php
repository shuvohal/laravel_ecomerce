<?php
use App\Http\Controllers\Frontend\Frontendcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;


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
Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
Route::get('/category/active/{id}', [CategoryController::class, 'activeCategory'])->name('category.active');
Route::get('/category/inactive/{id}', [CategoryController::class, 'inactiveCategory'])->name('category.inactive');
Route::get('/category/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');

// Brand Routes

Route::get('/brand/add', [BrandController::class, 'addBrand'])->name('brand.add');
Route::post('/brand/store', [BrandController::class, 'storeBrand'])->name('brand.store');
Route::get('/brand/manage', [BrandController::class, 'manageBrand'])->name('brand.manage');
Route::get('/brand/edit/{id}', [BrandController::class, 'editBrand'])->name('brand.edit');
Route::post('/brand/update/{id}', [BrandController::class, 'updateBrand'])->name('brand.update');
Route::get('/brand/active/{id}', [BrandController::class, 'activeBrand'])->name('brand.active');
Route::get('/brand/inactive/{id}', [BrandController::class, 'inactiveBrand'])->name('brand.inactive');
Route::get('/brand/delete/{id}', [BrandController::class, 'deleteBrand'])->name('brand.delete');

//product routes

Route::get('/product/add', [ProductController::class, 'addProduct'])->name('product.add');
Route::get('/product/manage', [ProductController::class, 'manageProduct'])->name('product.manage');
Route::post('/product/store', [ProductController::class, 'storeProduct'])->name('product.store');
Route::get('/product/inactive/{id}', [ProductController::class, 'inactiveProduct'])->name('product.inactive');
Route::get('/product/active/{id}', [ProductController::class, 'activeProduct'])->name('product.active');
