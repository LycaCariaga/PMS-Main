<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $patients = Patient::count();
        return view('dashboard.index',compact('users','patients'));
        
    }

}
