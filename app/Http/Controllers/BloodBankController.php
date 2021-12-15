<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateBloodBank;
use App\Models\BloodBank;
use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    public function list(){
        $bloods = BloodBank::all();

        return view('bloodBank.listBloodBank',compact('bloods'));
    }

    public function search($id){
        $blood = BloodBank::find($id);

        return view('bloodBank.detailsBloodBank',compact('blood'));
    }

    public function new(){
        return view('bloodBank.createBloodBank');
    }

    public function create(ValidateBloodBank $form){
        $blood = BloodBank::create($form->all());

        if (!$blood) {
            dd($blood->all());
        }

        return redirect()->route('listBloodBank')->with("messages", "O banco de sangue {$blood->id} foi adicionado com sucesso!");
    }

    public function delete($id){
        $blood = BloodBank::find($id);

        if(!$blood){
            return redirect()->back();
        }

        $blood->delete();
        return redirect()->route('listBloodBank')->with('messages',"O banco de sangue ##{{$blood->id}} foi deletado");
    }

    public function edit($id){
        $blood = BloodBank::find($id);

        if(!$blood){
            return redirect()->back();
        }

        return view('bloodBank.editBloodBank', compact('blood'));
    }

    public function update(ValidateBloodBank $form, $id){
        $blood = BloodBank::find($id);

        if(!$blood){
            return redirect()->back();
        }

        $blood->update($form->all());

        return redirect()->route('listBloodBank')->with('messages',"O banco de sangue ##{{$blood->id}} foi atualizado");
    }
}
