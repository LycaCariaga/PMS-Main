<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Patient;

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

  public function store(Request $request, Patient $patient)
  {
    // $input = $request->all();
    // $input = $request->patient->id;

    // Consultation::create($input);
    // $patient = Patient::find($id);

    // $consultations = new Consultation;
    // $consultations->BP = $request->BP;
    // $consultations->temp = $request->temp;
    // $consultations->RR = $request->RR;
    // $consultations->CR = $request->CR;
    // $consultations->weight = $request->weight;
    // $consultations->PR = $request->PR;
    // $consultations->complaint = $request->complaint;
    // $consultations->patient_id = $request->id;
    // dd($consultations);

    // $consultations->save();
    
    $patient = patient::findorfail($patient->id);
    dd($patient->id);
    Consultation::create(
      $request->all()
        );

    return redirect()->route('consultation.index');
  }
}
