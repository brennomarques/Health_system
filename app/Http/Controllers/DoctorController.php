<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateDoctor;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    function newDoctor() {
        return view("doctor.createDoctor");
    }

    public function listDoctor(){
        $doctors = Doctor::all();
        return view("doctor.listDoctor", compact("doctors"));
    }

    function searchDoctor($id) {
        $doctor = Doctor::find($id);
        return view("doctor.doctorDatails", compact('doctor'));
    }

    function createDoctor(ValidateDoctor $payload) {

        $response = Doctor::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listDoctor')->with("messages", "O Médico {$response->name} foi adicionado com sucesso!");

    }

    function deleteDoctor($id) {
        $response = Doctor::find($id);

        if (!$response){
            return redirect()->route('listPatient');
        }

        $response->delete();
        return redirect()->route('listDoctor')->with("messages", "O médico {$response->name} foi removido com sucesso!");

    }

    function editDoctor($id) {

        $doctor = Doctor::find($id);

        if (!$doctor) {
            return redirect()->back();
        }
        return view('doctor.editDoctor', compact('doctor'));
    }

    function updateDoctor(ValidateDoctor $payload, $id) {

        $doctor = Doctor::find($id);

        if (!$doctor) {
            return redirect()->back();
        }

        $doctor->update($payload->all());
        return redirect()->route('listDoctor')->with("messages", "O paciente {$doctor->name} atualizado com sucesso!");
    }

}
