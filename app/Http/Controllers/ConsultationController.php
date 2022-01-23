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
       return view('patient.view', compact('patients'));
    }
    public function store(Request $request)
    {
        Consultation::create(
        $request->all()
        );
        return redirect()->route('consultation.index');
    }
 
 
}
