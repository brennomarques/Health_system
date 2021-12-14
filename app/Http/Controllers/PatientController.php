<?php

namespace App\Http\Controllers;

use App\Http\Requests\updateAndCreate;
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

    function createPatient(updateAndCreate $payload) {

        $response = Patient::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listPatient')->with("messages", "O paciente {$response->name} foi adicionado com sucesso!");

    }

    function deletePatient($id) {
        $response = Patient::find($id);

        if (!$response){
            return redirect()->route('listPatient');
        }

        $response->delete();
        return redirect()->route('listPatient')->with("messages", "O paciente {$response->name} foi removido com sucesso!");

    }

    function editPatient($id){
        $patient = Patient::find($id);

        if (!$patient){
            return redirect()->back();
        }

        return view('patient.editPatient',compact('patient'));
    }

    function updatePatient(updateAndCreate $payload , $id) {
        $response = Patient::find($id);

        if (!$response){
            return redirect()->back();
        }

        $response->update($payload->all());
        return redirect()->route("listPatient")->with('messages',"O artigo ##{$id} foi alterado com sucesso!");
    }
}
