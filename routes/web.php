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

Route::get('/admin/dashboard', function () {
    return view('Backend.index');
})->middleware(['auth', 'isAdmin']);


Route::get('/home', function () {
    return view('Frontend.index');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'isAdmin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('home')->middleware(['auth', 'isAdmin']);

// Admin Panel
Route::prefix('/admin/patient/')->name('admin.patient.')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('index', [AdminController::class, 'patient_index'])->name('index');
    Route::get('/report', [AdminController::class, 'patient_report'])->name('report');
    Route::get('/report/{id}', [AdminController::class, 'patient_report_show'])->name('report.show');
    Route::get('show/{id}', [AdminController::class, 'patient_show'])->name('show');
    Route::delete('{id}', [AdminController::class, 'patient_delete'])->name('delete');
});

Route::get('/analysis/create', [HomeController::class, 'analysis_create'])->name('analysis.create')->middleware(['auth']);
Route::post('/analysis/store', [PredictionController::class, 'predict'])->name('analysis.store')->middleware(['auth']);
Route::get('/analysis/log', [HomeController::class, 'analysis_log'])->name('analysis.log')->middleware(['auth']);
Route::post('/predict', [PredictionController::class, 'predict'])->name('predict');

// Route::get('/anlaysis', [HomeController::class, 'analysis_index'])->name('analysis.index');


Route::get('/analysis', [HomeController::class, 'analysis_show'])->name('analysis.show')->middleware(['auth']);
Route::get('/', [HomeController::class, 'homepage'])->name('homepage')->middleware(['auth']);
// Prediction page for logged in patient
Route::get('/prediction', [HomeController::class, 'prediction'])->name('prediction');
// About US Page for Normal Users
Route::get('/frontend/aboutus', [HomeController::class, 'aboutUs'])->name('Frontend.aboutus');
// Get Method for Feedback
Route::get('/frontend/contactus', [HomeController::class, 'contactUs'])->name('Frontend.contactus');
// Post Method for Feedback
Route::post('/frontend/contactus', [HomeController::class, 'contactusStore'])->name('frontend.contactus.store');

Route::get('/admin/contactus', [AdminController::class, 'contactIndex'])->name('contact.index')->middleware(['auth', 'isAdmin']);
// user profile added here
Route::get('/frontend/userprofile', [HomeController::class, 'userprofile'])->name('Frontend.userprofile');

// test
Route::get('/frontend/predictionResult', [HomeController::class, 'predictionResult'])->name('Frontend.predictionResult');
