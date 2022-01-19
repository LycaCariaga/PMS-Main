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
 
       $input = $request->all();
      $input['history'] = $request->input('history'); 
       Patient::create($input);
      
      return redirect()->route('patient.index');
      
   }

   public function view($id)
   {
      $patients = Patient::findorfail($id); 
      return view('patient.view', compact('patients'));
   }

   public function initial()
   {
      
      return view('patient.initial');
   }

   public function edit(Request $request){
      $patient = Patient::find($request->id);
     
     
     return view('patient.edit', compact('patient'));
      // return redirect()->route('patient.index');
       
   }
   public function update(Request $request){
      $patient = Patient::find($request->id)->update($request->all());
   
      return redirect()->route('patient.index');
   }
}
