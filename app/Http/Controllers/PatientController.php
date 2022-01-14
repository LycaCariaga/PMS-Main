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
   // Patient::create(
   //        $request->all());
       $input = $request->all();
      $input['history'] = $request->input('history');
       Patient::create($input);
      
      return redirect()->route('patient.index');
      // $patient = new Patient;
      // $patient->last_name = $request->last_name;
      // $patient->first_name = $request->first_name;
      // $patient->middle_name = $request->middle_name;
      // $patient->birthday = $request->birthday;
      // $patient->department_id = $request->department_id;
      // $patient->gender = $request->gender;
      // $patient->save();
      
      
      

      // return view('patient.index');
   }

   public function initial()
   {
      
      return view('patient.initial');
   }
}
