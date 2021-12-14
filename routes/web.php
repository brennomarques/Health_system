<?php

use App\Http\Controllers\{PatientController};
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

Route::get('/', function () {
    return view('simple');
});

Route::get('/paciente', [PatientController::class, 'listPatients'])->name('listPatient');
Route::get('/paciente/criar', [PatientController::class, 'newPatient'])->name('newPatient');
Route::get('/paciente/atualizar/{id}', [PatientController::class, 'editPatient'])->name('editPatient');
Route::put('/paciente/{id}', [PatientController::class, 'updatePatient'])->name('updatePatient');
Route::get('/paciente/{id}', [PatientController::class, 'searchPatient'])->name('searchPatient');
Route::post('/paciente', [PatientController::class, 'createPatient'])->name('createPatient');
Route::delete('/paciente/{id}', [PatientController::class, 'deletePatient'])->name('deletePatient');
