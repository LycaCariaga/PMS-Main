<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
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

    Consultation::create(
      $request->all()
    );

    return redirect()->route('patient.view', ['id' => $patient]);
  }
}
