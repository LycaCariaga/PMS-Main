@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="section-header">
      <h3 class="page__heading">Patient Management</h3>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex justify-content-start">
              <a class="" href="{{ route('patient.index') }}">
                <button type="button" class="btn btn-primary btn-sm mr-5 p-2">
                  Go Back To List
                </button>
              </a>
              <span class="pr-5"></span>
            </div>
            <div class="card-header d-flex justify-content-start bg-primary">
              <div>
                <h5 class="ml-5 mb-0 text-white">Basic Information</h5>
              </div>
            </div>
            <div class="card-body">
              <div class="table">
                <form action="{{ route('patient.update') }}" method="POST" class="row g-2">
                  <input type="hidden" name="id" value="{{ $patient->id }}">
                  @csrf
                  <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name"
                      value="{{ $patient->last_name }}">
                  </div>

                  <div class="col-md-6">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" name="birthday" id="birthday"
                      value="{{ $patient->birthday }}">
                  </div>

                  <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name"
                      value="{{ $patient->first_name }}">
                  </div>



                  <div class="col-md-6">
                    <label>Department</label>
                    <select class="form-control" name="department_id">
                      <option value = {{$patient->department->id}} hidden>{{$patient->department->department}}</option>
                      @foreach ($departments as $department)
                        <option value = "{{$department->id}}">{{$department->department}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label for="middlename" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" id="middle_name"
                      value="{{ $patient->middle_name }}">
                  </div>

                  <div class="col-md-6">
                    <label>Gender</label>
                    <div class="form-check" value="{{ $patient->gender }}">
                      <input class="form-check-input" type="radio" value="Male" name="gender" id="male"
                        {{ $patient->gender == 'Male' ? 'checked' : '' }}>
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="Female" name="gender" id="female"
                        {{ $patient->gender == 'Female' ? 'checked' : '' }}>
                      <label class="form-check-label" for="female">
                        Female
                      </label>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-start bg-primary">
                    <div>
                      <h5 class="ml-5 mb-0 text-white">Medical History</h5>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table">
                      <div class="row g-2">
                        <ul>
                          <div class="mx-auto" style="width: 200px;">
                            
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]"   
                                  id="flexCheckDiabetes"  
                                  value="Diabetes" {{ $patient->history == 'Diabetes' ? 'checked' : '' }}  >
                                 
                                  
                                <label class="form-check-label" for="flexCheckDiabetes">
                                  Diabetes
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Heart Disease"
                              
                                  id="flexCheckHD">
                                <label class="form-check-label" for="flexCheckHD">
                                  Heart Disease
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Allergy"
                                
                                  id="flexCheckAllergy" >
                                <label class="form-check-label" for="flexCheckAllergy">
                                  Allergy
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Measles"
                                  id="flexCheckMeasles"  {{ $patient->history == 'Measles' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckMeasles">
                                  Measles
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Asthma"
                                  id="flexCheckAsthma"  {{ $patient->history == 'Asthma' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckAsthma">
                                  Asthma
                                </label>
                              </div>
                            </div>
                          </ul>

                          <ul>
                            <div class="mx-auto" style="width: 200px;">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Hepatitis"
                                  id="flexCheckHepatitis"  {{ $patient->history == 'Hepatitis' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckHepatitis">
                                  Hepatitis
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Seizures"
                                  id="flexCheckSeizures"  {{ $patient->history == 'Seizures' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckSeizures">
                                  Seizures
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Scoliosis"
                                  id="flexCheckScoliosis"  {{ $patient->history == 'Scoliosis' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckScoliosis">
                                  Scoliosis
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckPPI">
                                <label class="form-check-label" for="flexCheckPPI"  {{ $patient->history == 'Primary Pulmonary Infection' ? 'checked' : '' }}>
                                  Primary Pulmonary Infection
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]"
                                  value="Otitis External/Media" id="flexCheckOE"  {{ $patient->history == 'Otitis External/Media' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckOE">
                                  Otitis External/Media
                                </label>
                              </div>
                            </div>
                          </ul>

                          <ul>
                            <div class="mx-auto" style="width: 200px;">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]"
                                  value="Urinary Track Infection" id="flexCheckUTI"  {{ $patient->history == 'Urinary Track Infection' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckUTI">
                                  Urinary Track Infection
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Mumps"
                                  id="flexCheckMumps"  {{ $patient->history == 'Mumps' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckMumps">
                                  Mumps
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Chicken Pox"
                                  id="flexCheckChicken"  {{ $patient->history == 'Chicken Pox' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckChicken">
                                  Chicken Pox
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Thypoid"
                                  id="flexCheckThypoid"  {{ $patient->history == 'Thypoid' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckThypoid">
                                  Thypoid
                                </label>
                              </div>

                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="history[]" value="Nose Bleeding"
                                  id="flexCheckNose"  {{ $patient->history == 'Nose Bleeding' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckNose">
                                  Nose Bleeding
                                </label>
                              </div>
                            </div>
                          </ul>

                        <div class="modal-footer text-right">
                          <div class="container d-flex justify-content-end">

                            <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i
                                class="far fa-save"></i>
                              Save
                            </button>
                            </form>

                            <button type="button" class="btn btn-icon icon-left btn-danger mr-5" data-dismiss="modal"><i
                                class="fas fa-ban"></i>Cancel</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

@endsection
