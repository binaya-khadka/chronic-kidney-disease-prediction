<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PredictionController;
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


// Route::group(['middleware' => 'auth'], function () {
//     Route::prefix('/admin')->name('admin.')->group(function () {

//     });
// });

Route::get('/admin/dashboard', function () {
    return view('Backend.index');
})->middleware(['auth', 'isAdmin']);


Route::get('/home', function () {
    return view('Frontend.index');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'isAdmin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('home')->middleware(['auth', 'isAdmin']);

// Testing...
// Route::prefix('/homepage/patient')->name('homepage.patient.')->group(function () {
//     Route::get('/register', [HomeController::class, 'register'])->name('register');
//     Route::post('/register', [HomeController::class, 'register_store'])->name('register.store');
//     Route::get('/login', [HomeController::class, 'login'])->name('login');
//     Route::post('/login', [HomeController::class, 'login_patient'])->name('login.patient');
// });

Route::prefix('/admin/patient/')->name('admin.patient.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/report', [AdminController::class, 'patient_report'])->name('report');
    Route::get('/report/{id}', [AdminController::class, 'patient_report_show'])->name('report.show');
    Route::get('index', [AdminController::class, 'patient_index'])->name('index');
    Route::get('show/{id}', [AdminController::class, 'patient_show'])->name('show');
    Route::delete('{id}', [AdminController::class, 'patient_delete'])->name('delete');
    Route::get('trashed', [AdminController::class, 'patient_trash_store'])->name('trashed');
    Route::delete('trashed/{id}', [AdminController::class, 'patient_trash_force_delete'])->name('trashed.delete');
    Route::get('trashed/restore/{id}', [AdminController::class, 'patient_trash_record_restore'])->name('trashed.restore');
});

Route::get('/analysis/create', [HomeController::class, 'analysis_create'])->name('analysis.create')->middleware(['auth']);
// Route::post('/analysis/store', [HomeController::class, 'analysis_store'])->name('analysis.store')->middleware(['auth']);
Route::post('/analysis/store', [PredictionController::class, 'predict'])->name('analysis.store')->middleware(['auth']);
Route::get('/analysis/log', [HomeController::class, 'analysis_log'])->name('analysis.log')->middleware(['auth']);
Route::post('/predict', [PredictionController::class, 'predict'])->name('predict');

// Route::get('/anlaysis', [HomeController::class, 'analysis_index'])->name('analysis.index');


Route::get('/analysis', [HomeController::class, 'analysis_show'])->name('analysis.show')->middleware(['auth']);
Route::get('/', [HomeController::class, 'homepage'])->name('homepage')->middleware(['auth']);
Route::get('/prediction', [HomeController::class, 'prediction'])->name('prediction');
Route::get('/frontend/aboutus', [HomeController::class, 'aboutUs'])->name('Frontend.aboutus');
Route::get('/frontend/contactus', [HomeController::class, 'contactUs'])->name('Frontend.contactus');

// Route::get('/admin/patient/index', [AdminController::class, 'patient_index'])->name('admin.patient.index');
// Route::get('/admin/patient/show/{id}', [AdminController::class, 'patient_show'])->name('admin.patient.show');
// Route::delete('/admin/patient/{id}', [AdminController::class, 'patient_delete'])->name('admin.patient.delete');

// Route::get('/admin/patient/trashed', [AdminController::class, 'patient_trash_store'])->name('admin.patient.trashed');
// Route::delete('/admin/patient/trashed/{id}', [AdminController::class, 'patient_trash_force_delete'])->name('admin.patient.trashed.delete');
// Route::get('/admin/patient/trashed/restore/{id}', [AdminController::class, 'patient_trash_record_restore'])->name('admin.patient.trashed.restore');
