<?php

namespace App\Http\Controllers;

use App\Models\{BloodBank, Doctor, Donation, Donor, Trainee};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
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

    function reportBloodBank() {
        $countBloodBank = DB::table('blood_banks')->count();
        $listBloodBank = BloodBank::all();
        return view("report.reportBloodBank", compact('countBloodBank', 'listBloodBank'));
    }

    function reportDonor() {
        $countDonor = DB::table('donors')->count();
        $listDonor = Donor::all();
        return view("report.reportDonor", compact('countDonor', 'listDonor'));
    }

    function reportDashboard() {
        $countDonor = DB::table('donors')->count();
        $countBloodBank = DB::table('blood_banks')->count();
        $countDonation = DB::table('donations')->count();
        $countDoctor = DB::table('doctors')->count();
        $countTreinee = DB::table('trainees')->count();
        $countPatient = DB::table('patients')->count();

        return view("dashboard.dashboard", compact('countDonor', 'countBloodBank', 'countDonation', 'countDoctor', 'countTreinee', 'countPatient'));
    }
}
