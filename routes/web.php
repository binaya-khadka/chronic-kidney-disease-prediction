<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Layouts.app');
// });
// Route::get('/admin', function () {
//     return view('admin-login');
// });

// Route::get('/patient', function () {
//     return view('patient-login');
// });

// Route::get('/patient/create', [HomeController::class, 'create']);


// Backend

Route::get('/admin/dashboard', function () {
    return view('Backend.index');
});


Route::get('/home', function () {
    return view('Frontend.index');
});

Route::get('/admin', [AdminController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('home');
