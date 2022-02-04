<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\Consultation;
class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $patients = Patient::count();
        $consultations = Consultation::count();
        return view('dashboard.index',compact('users','patients','consultations'));
        
    }

}
