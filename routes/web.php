<?php

use App\Http\Controllers\{BloodBankController, DoctorController, DonorController, PatientController, TraineeController, DonationController, Report};

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

Route::get('/bancodesangue',[BloodBankController::class,'list'])->name('listBloodBank');
Route::get('/bancodesangue/criar', [BloodBankController::class, 'new'])->name('newBloodBank');
Route::get('/bancodesangue/{id}', [BloodBankController::class, 'search'])->name('searchBloodBank');
Route::post('/bancodesangue', [BloodBankController::class, 'create'])->name('createBloodBank');
Route::get('/bancodesangue/editar/{id}',[BloodBankController::class,'edit'])->name('editBloodBank');
Route::delete('/bancodesangue/{id}',[BloodBankController::class,'delete'])->name('deleteBloodBank');
Route::put('/bancodesangue/{id}',[BloodBankController::class,'update'])->name('updateBloodBank');

Route::get('/doacao',[DonationController::class,'list'])->name('listDonation');
Route::get('/doacao/criar', [DonationController::class, 'new'])->name('newDonation');
Route::get('/doacao/{id}', [DonationController::class, 'search'])->name('searchDonation');
Route::post('/doacao', [DonationController::class, 'create'])->name('createDonation');
Route::get('/doacao/editar/{id}',[DonationController::class,'edit'])->name('editDonation');
Route::delete('/doacao/{id}',[DonationController::class,'delete'])->name('deleteDonation');
Route::put('/doacao/{id}',[DonationController::class,'update'])->name('updateDonation');

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

Route::get('/relatorio/administrativo/medicos', [Report::class, 'reportDoctor'])->name('reportDoctor');
Route::get('/relatorio/administrativo/estagiario', [Report::class, 'reportTreinee'])->name('reportTreinee');

Route::get('/relatorio/doacao', [Report::class, 'reportDonation'])->name('reportDonation');
