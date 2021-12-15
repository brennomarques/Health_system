<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateDonations;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function list(){
        $donations = Donation::all();

        return view('donations.listDonations',compact('donations'));
    }

    public function search($id){
        $donation = Donation::find($id);

        return view('donations.detailsDonations',compact('donation'));
    }

    public function new(){
        return view('donations.createDonations');
    }

    public function create(ValidateDonations $form){
        $donation = Donation::create($form->all());

        if (!$donation) {
            dd($donation->all());
        }

        return redirect()->route('listDonation')->with("messages", "A doação {$donation->id} foi adicionado com sucesso!");
    }

    public function delete($id){
        $donation = Donation::find($id);

        if(!$donation){
            return redirect()->back();
        }

        $donation->delete();
        return redirect()->route('listDonation')->with('messages',"A doação ##{{$donation->id}} foi deletado");
    }

    public function edit($id){
        $donation = Donation::find($id);

        if(!$donation){
            return redirect()->back();
        }

        return view('donations.editDonations', compact('donation'));
    }

    public function update(ValidateDonations $form, $id){
        $donation = Donation::find($id);

        if(!$donation){
            return redirect()->back();
        }

        $donation->update($form->all());

        return redirect()->route('listDonation')->with('messages',"A doação ##{{$donation->id}} foi atualizado");
    }
}
