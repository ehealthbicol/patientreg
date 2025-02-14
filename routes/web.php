<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/patient', [PatientController::class, 'index'])->name('patients.index');
Route::get('/patient/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('/patient', [PatientController::class, 'store'])->name('patients.store');
Route::get('/patient/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('/patient/{patient}/update', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patient/{patient}/delete', [PatientController::class, 'delete'])->name('patients.delete');
Route::post('/search', [PatientController::class, 'search'])->name('search');
Route::get('/patient/{patient}/view', [PatientController::class, 'view'])->name('patients.view'); 
