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

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('home');


// Route::get('/homepage/register', [HomeController::class, 'register'])->name('homepage.register');
// Route::post('/homepage/register', [HomeController::class, 'register_store'])->name('homepage.register.store');

Route::prefix('/homepage/patient')->name('homepage.patient.')->group(function () {
    Route::get('/register', [HomeController::class, 'register'])->name('register');
    Route::post('/register', [HomeController::class, 'register_store'])->name('register.store');
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::post('/login', [HomeController::class, 'login_patient'])->name('login.patient');
});


Route::get('/admin/patient/index', [AdminController::class, 'patient_index'])->name('admin.patient.index');
Route::get('/admin/patient/show/{id}', [AdminController::class, 'patient_show'])->name('admin.patient.show');
Route::delete('/admin/patient/{id}', [AdminController::class, 'patient_delete'])->name('admin.patient.delete');

Route::get('/admin/patient/trashed', [AdminController::class, 'patient_trash_store'])->name('admin.patient.trashed');
