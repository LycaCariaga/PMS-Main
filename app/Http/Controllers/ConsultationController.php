<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Intervention;
use App\Patient;
use App\Department;

class ConsultationController extends Controller

{
  public function index()
  {
    $consultations = Consultation::with('patient')->get();
    return view('consultation.index', compact('consultations'));
  }

  public function create()
  {
    $patients = Patient::all();

    return view('consultation.create', compact('patients'));
  }

  public function store(Request $request)
  {
    $patient = Patient::find($request->patient_id);
    // $departments = Department::all();
    // $request->get('history[]');

    $consultation=Consultation::create(
      $request->all()
    );

    return redirect()->route('consultation.show',  ['id' => $consultation]);
  }
  public function show($id)
  {
    
    
    $consultations = Consultation::with('patient')->findOrFail($id);

    return view('consultation.show', compact('consultations'));
   
  }
}
