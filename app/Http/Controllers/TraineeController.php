<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateTreinee;
use App\Models\Trainee;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function listTrainee(){
        $treinees = Trainee::all();
        return view("treinee.listTreinee", compact("treinees"));
    }

    function searchTrainee($id) {
        $treinee = Trainee::find($id);
        return view("treinee.treineeDatails", compact('treinee'));
    }

    function createTreinee(ValidateTreinee $payload) {

        $response = Trainee::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listTrainee')->with("messages", "O estagiário {$response->name} foi adicionado com sucesso!");

    }

    function newTreinee() {
        return view("treinee.createTreinee");
    }

    function deleteTreinee($id) {
        $response = Trainee::find($id);

        if (!$response){
            return redirect()->route('listTrainee');
        }

        $response->delete();
        return redirect()->route('listTrainee')->with("messages", "O estagiário {$response->name} foi removido com sucesso!");

    }

    function editTreinee($id) {

        $treinee = Trainee::find($id);

        if (!$treinee) {
            return redirect()->back();
        }
        return view('treinee.editTreinee', compact('treinee'));
    }

    function updateTreinee(ValidateTreinee $payload, $id) {

        $treinee = Trainee::find($id);

        if (!$treinee) {
            return redirect()->back();
        }

        $treinee->update($payload->all());
        return redirect()->route('listTrainee')->with("messages", "O estagiário {$treinee->name} atualizado com sucesso!");
    }

}
