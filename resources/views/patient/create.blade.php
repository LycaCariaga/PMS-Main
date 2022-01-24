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
                <form action="{{ route('patient.save') }}" method="post" class="row g-2">
                  @csrf
                  <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name">
                  </div>

                  <div class="col-md-6">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" name="birthday" id="birthday">
                  </div>

                  <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name">
                  </div>

                  <div class="col-md-6">
                    <label>Department</label>
                    <select class="form-control" name="department_id">
                      @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label for="middlename" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" name="middle_name" id="middle_name">
                  </div>

                  <div class="col-md-6">
                    <label>Gender</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="Male" name="gender" id="male">
                      <label class="form-check-label" for="male">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" value="Female" name="gender" id="female">
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
                              <input class="form-check-input" type="checkbox" name="history[]" value="Diabetes"
                                id="flexCheckDiabetes">
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
                                id="flexCheckAllergy">
                              <label class="form-check-label" for="flexCheckAllergy">
                                Allergy
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Measles"
                                id="flexCheckMeasles">
                              <label class="form-check-label" for="flexCheckMeasles">
                                Measles
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Asthma"
                                id="flexCheckAsthma">
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
                                id="flexCheckHepatitis">
                              <label class="form-check-label" for="flexCheckHepatitis">
                                Hepatitis
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Seizures"
                                id="flexCheckSeizures">
                              <label class="form-check-label" for="flexCheckSeizures">
                                Seizures
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Scoliosis"
                                id="flexCheckScoliosis">
                              <label class="form-check-label" for="flexCheckScoliosis">
                                Scoliosis
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]"
                                value="Primary Pulmonary Infection" id="flexCheckPPI">
                              <label class="form-check-label" for="flexCheckPPI">
                                Primary Pulmonary Infection
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]"
                                value="Otitis External/Media" id="flexCheckOE">
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
                                value="Urinary Track Infection" id="flexCheckUTI">
                              <label class="form-check-label" for="flexCheckUTI">
                                Urinary Track Infection
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Mumps"
                                id="flexCheckMumps">
                              <label class="form-check-label" for="flexCheckMumps">
                                Mumps
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Chicken Pox"
                                id="flexCheckChicken">
                              <label class="form-check-label" for="flexCheckChicken">
                                Chicken Pox
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Thypoid"
                                id="flexCheckThypoid">
                              <label class="form-check-label" for="flexCheckThypoid">
                                Thypoid
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="history[]" value="Nose Bleeding"
                                id="flexCheckNose">
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
