<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //patient controller
    public function index()
    {
       //return view('patient.index');
       return view('patient.index');
    }
    public function create()
    {
       
       return view('patient.create');
    }

    public function initial()
    {
       
       return view('patient.initial');
    }
}
