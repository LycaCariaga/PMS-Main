<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Department;
use App\Consultation;


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
      $consultations = Consultation::with('patient')->get();

      return view('patient.view', compact('patients', 'consultations'));
   }

  

   public function edit(Request $request){
      $patient = Patient::find($request->id);
      $departments = Department::all();
      $request->get('history[]');
     return view('patient.edit', compact('patient','departments')); 
   }

   public function update(Request $request){
      
      $patient = Patient::find($request->id)->update($request->all());
    return redirect()->route('patient.view', ['id' => $patient]);
    
   }

   public function delete($id){
        
      $patient = Patient::findorfail($id);
      $patient->delete();

      return redirect()->route('patient.index');
  }
  public function initial(){
   return view('patient.initial');
}
}
