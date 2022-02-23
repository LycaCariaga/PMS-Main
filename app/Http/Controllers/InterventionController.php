<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intervention;
use App\Consultation;
use App\Patient;
use App\User;

class InterventionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $interventions = Intervention::with('consultation')->get();
    return view('intervention.index', compact('interventions'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

    $consultations = Consultation::all();

    return view('intervention.create', compact('consultations'));
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $consultation = Consultation::find($request->consultation_id);
    // wag na daw gamitin to sabi ni god coder Jonah. Deprecated
    // Intervention::create(
    //   $request->all()
    // );
    
    $intervention = new Intervention;
    $intervention->medicine = $request->medicine;
    $intervention->medicineQuantity = $request->medicineQuantity;
    $intervention->supply = $request->supply;
    $intervention->supplyQuantity = $request->supplyQuantity;
    $intervention->intervention = $request->intervention;
    $intervention->ClinicRestNoM = $request->ClinicRestNoM;
    $intervention->ClinicRestApproved = $request->ClinicRestApproved;
    $intervention->SentHomeApproved = $request->SentHomeApproved;
    $intervention->SentToEmergencyRoomER = $request->SentToEmergencyRoomER;
    $intervention->SentToEmergencyRoomWitness = $request->SentToEmergencyRoomWitness;
    // $intervention->SentToEmergencyRoomWaiver = $request->SentToEmergencyRoomWaiver;
    $intervention->consultation_id = $request->consultation_id;

    // for single file uploading
    $upload = $request->file('SentToEmergencyRoomWaiverName');
    $path = $upload->storeAs('waivers',$upload->getClientOriginalName(), 'public');

    $intervention->SentToEmergencyRoomWaiverName = $upload->getClientOriginalName();
    $intervention->SentToEmergencyRoomWaiverFile = $path;

    
    $intervention->save();

    return redirect()->route('intervention.index', ['id' => $consultation]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {



    $interventions = Intervention::with('consultation')->findOrFail($id);
    $users = User::all();

    return view('intervention.show', compact('interventions', 'users'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
