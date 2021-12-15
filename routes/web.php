<?php

use App\Http\Controllers\{DoctorController, DonorController, PatientController, TraineeController};
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

Route::view('dashboard', 'dashboard/dashboard')->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'generalSearch'])->name('dashboard');
Route::redirect('/', 'dashboard', 301);

Route::get('/paciente', [PatientController::class, 'listPatients'])->name('listPatient');
Route::get('/paciente/criar', [PatientController::class, 'newPatient'])->name('newPatient');
Route::get('/paciente/{id}', [PatientController::class, 'searchPatient'])->name('searchPatient');
Route::post('/paciente', [PatientController::class, 'createPatient'])->name('createPatient');
Route::delete('/paciente/{id}', [PatientController::class, 'deletePatient'])->name('deletePatient');
Route::get('/paciente/editar/{id}', [PatientController::class, 'editPatient'])->name('editPatient');
Route::put('/paciente/{id}', [PatientController::class, 'updatePatient'])->name('updatePatient');

Route::get('/medicos', [DoctorController::class, 'listDoctor'])->name('listDoctor');
Route::get('/medico/criar', [DoctorController::class, 'newDoctor'])->name('newDoctor');
Route::get('/medicos/{id}', [DoctorController::class, 'searchDoctor'])->name('searchDoctor');
Route::post('/medico', [DoctorController::class, 'createDoctor'])->name('createDoctor');
Route::delete('/medico/{id}', [DoctorController::class, 'deleteDoctor'])->name('deleteDoctor');
Route::get('/medico/editar/{id}', [DoctorController::class, 'editDoctor'])->name('editDoctor');
Route::put('/medico/{id}', [DoctorController::class, 'updateDoctor'])->name('updateDoctor');

Route::get('/estagiario', [TraineeController::class, 'listTrainee'])->name('listTrainee');
Route::get('/estagiario/criar', [TraineeController::class, 'newTreinee'])->name('newTreinee');
Route::post('/estagiario', [TraineeController::class, 'createTreinee'])->name('createTreinee');
Route::get('/estagiario/{id}', [TraineeController::class, 'searchTrainee'])->name('searchTrainee');
Route::delete('/estagiario/{id}', [TraineeController::class, 'deleteTreinee'])->name('deleteTreinee');
Route::get('/estagiario/editar/{id}', [TraineeController::class, 'editTreinee'])->name('editTreinee');
Route::put('/estagiario/{id}', [TraineeController::class, 'updateTreinee'])->name('updateTreinee');

Route::get('/doador', [DonorController::class, 'listDonor'])->name('listDonor');
Route::get('/doador/criar', [DonorController::class, 'newDonor'])->name('newDonor');
Route::post('/doador', [DonorController::class, 'createDonor'])->name('createDonor');
Route::get('/doador/{id}', [DonorController::class, 'searchDonor'])->name('searchDonor');
Route::get('/doador/editar/{id}', [DonorController::class, 'editDonor'])->name('editDonor');
Route::put('/doador/{id}', [DonorController::class, 'updateDonor'])->name('updateDonor');
Route::delete('/doador/{id}', [DonorController::class, 'deleteDonor'])->name('deleteDonor');
