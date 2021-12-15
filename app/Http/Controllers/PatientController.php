<?php

namespace App\Http\Controllers;

use App\Http\Requests\{ValidatePatient};
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    function newPatient() {
        return view("patient.createPatient");
    }

    public function listPatients(){
        $patients = Patient::all();
        return view("patient.listPatient", compact("patients"));
    }

    function searchPatient($id) {
        $patient = Patient::find($id);
        return view("patient.patientDatails", compact('patient'));
    }

    function createPatient(ValidatePatient $payload) {

        $response = Patient::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listPatient')->with("messages", "O paciente {$response->name} foi adicionado com sucesso!");

    }

    function editPatient($id) {

        $patient = Patient::find($id);

        if (!$patient) {
            return redirect()->back();
        }
        return view('patient.editPatient', compact('patient'));
    }

    function updatePatient(ValidatePatient $payload, $id) {

        $patient = Patient::find($id);

        if (!$patient) {
            return redirect()->back();
        }

        $patient->update($payload->all());
        return redirect()->route('listPatient')->with("messages", "O paciente {$patient->name} atualizado com sucesso!");
    }

    function deletePatient($id) {
        $response = Patient::find($id);

        if (!$response){
            return redirect()->route('listPatient');
        }

        $response->delete();
        return redirect()->route('listPatient')->with("messages", "O paciente {$response->name} foi removido com sucesso!");

    }

}
