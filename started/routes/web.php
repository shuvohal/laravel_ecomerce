<?php
use App\Http\Controllers\Frontend\Frontendcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

// simple dashboard page so successful login has somewhere to redirect
Route::get('/admin/dashboard', function () {
	return '<h2 style="padding:40px; font-family: sans-serif;">Welcome to the admin dashboard (placeholder)</h2>';
})->name('admin.dashboard');