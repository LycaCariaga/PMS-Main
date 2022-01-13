<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Department;

class PatientController extends Controller
{
   //patient controller
   public function index()
   {
      $patients = Patient::with('department')->get();
      return view('patient.index', compact('patients'));
   }
   public function create()
   {  
      $departments = Department::all();
      return view('patient.create', compact('departments'));
   }

   public function save(Request $request)
   {
      
      $patient = new Patient;
      $patient->lastname = $request->lastname;
      $patient->firstname = $request->firstname;
      $patient->middlename = $request->middlename;
      $patient->birthday = $request->birthday;
      $patient->department = $request->department;
      $patient->gender = $request->gender;
      $patient->save();

      return view('patient.index');
   }

   public function initial()
   {
      
      return view('patient.initial');
   }
}
