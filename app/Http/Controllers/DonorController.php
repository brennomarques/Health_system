<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateDonor;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function listDonor(){
        $donors = Donor::all();
        return view("donor.listDonor", compact("donors"));
    }

    function searchDonor($id) {
        $donor = Donor::find($id);
        return view("donor.donorDatails", compact('donor'));
    }

    function newDonor() {
        return view("donor.createDonor");
    }

    function createDonor(ValidateDonor $payload) {

        $response = Donor::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listDonor')->with("messages", "O doador {$response->name} foi adicionado com sucesso!");

    }

    function editDonor($id) {

        $donor = Donor::find($id);

        if (!$donor) {
            return redirect()->back();
        }
        return view('donor.editDonor', compact('donor'));
    }

    function updateDonor(ValidateDonor $payload, $id) {

        $donor = Donor::find($id);

        if (!$donor) {
            return redirect()->back();
        }

        $donor->update($payload->all());
        return redirect()->route('listDonor')->with("messages", "O doador {$donor->name} atualizado com sucesso!");
    }

    function deleteDonor($id) {
        $response = Donor::find($id);

        if (!$response){
            return redirect()->route('listDonor');
        }

        $response->delete();
        return redirect()->route('listDonor')->with("messages", "O doador {$response->name} foi removido com sucesso!");

    }
}
