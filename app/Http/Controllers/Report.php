<?php

namespace App\Http\Controllers;

use App\Models\{Doctor, Donation, Trainee};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Report extends Controller
{
    function reportDoctor() {
        $countDoctor = DB::table('doctors')->count();
        $listDoctor = Doctor::all();
        return view("report.reportDoctor", compact('countDoctor', 'listDoctor'));
    }

    function reportTreinee() {
        $countTreinee = DB::table('trainees')->count();
        $listTreinee = Trainee::all();
        return view("report.reportTreinee", compact('countTreinee', 'listTreinee'));
    }

    function reportDonation() {
        $countDonation = DB::table('donations')->count();
        $listDonation = Donation::all();
        return view("report.reportDonation", compact('countDonation', 'listDonation'));
    }
}
