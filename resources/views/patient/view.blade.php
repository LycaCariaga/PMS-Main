@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="section-header">
      <h3 class="page__heading">Patient Management</h3>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col lg-12">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h2 class="m-2 bg-primary font-weight-bold text-white">Patient Record</h2>
              <div class="dropdown">
                <a class="dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-lg fa-fw text-white"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink"
                  style="">
                  <a class="dropdown-item text-primary" href="#">Edit</a>
                  <a class="dropdown-item text-danger" href="#">Delete</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <h4>{Patient FullName}</h4>
              <h5>{Patient Age}</h5>
              <h5>{Patient Birthday}</h5>
              <h5>{Patient Department}</h5>
              <h6>{Patient History}</h6>
            </div>
          </div>

          <div class="card">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                <h4 class="m-2 bg-primary font-weight-bold text-white">Assessment</h4>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="table">
                  <div id="exTab1">
                    <ul class="nav nav-pills">
                      <li class="active">
                        <a class="nav-link " href="#1a" data-toggle="tab">Initial Assessment</a>
                      </li>
                      <li>
                        <a class="nav-link " href="#2a" data-toggle="tab">Diagnosis</a>
                      </li>
                      <li>
                        <a class="nav-link " href="#3a" data-toggle="tab">Treatment</a>
                      </li>
                    </ul>
  
                    <div class="tab-content clearfix">
                      <div class="tab-pane active" id="1a">
                        <div class="row">
                          <div class="col-md-12">
                            <hr>
                            <h6 class="bg-primary text-white p-2">Medical History</h6>
                            <form class="row g-2">
                              <div class="card-body">
                                <div class="table">
                                  <div class="row g-2">
                                    <ul>
                                      <div class="mx-auto" style="width: 200px;">
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDiabetes">
                                          <label class="form-check-label" for="flexCheckDiabetes">
                                            Diabetes
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckHD">
                                          <label class="form-check-label" for="flexCheckHD">
                                            Heart Disease
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckAllergy">
                                          <label class="form-check-label" for="flexCheckAllergy">
                                            Allergy
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckMeasles">
                                          <label class="form-check-label" for="flexCheckMeasles">
                                            Measles
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckAsthma">
                                          <label class="form-check-label" for="flexCheckAsthma">
                                            Asthma
                                          </label>
                                        </div>
                                      </div>
                                    </ul>
  
                                    <ul>
                                      <div class="mx-auto" style="width: 200px;">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckHepatitis">
                                          <label class="form-check-label" for="flexCheckHepatitis">
                                            Hepatitis
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckSeizures">
                                          <label class="form-check-label" for="flexCheckSeizures">
                                            Seizures
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckScoliosis">
                                          <label class="form-check-label" for="flexCheckScoliosis">
                                            Scoliosis
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckPPI">
                                          <label class="form-check-label" for="flexCheckPPI">
                                            Primary Pulmonary Infection
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckOE">
                                          <label class="form-check-label" for="flexCheckOE">
                                            Otitis External/Media
                                          </label>
                                        </div>
                                      </div>
                                    </ul>
  
                                    <ul>
                                      <div class="mx-auto" style="width: 200px;">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckUTI">
                                          <label class="form-check-label" for="flexCheckUTI">
                                            Urinary Track Infection
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckMumps">
                                          <label class="form-check-label" for="flexCheckMumps">
                                            Mumps
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChicken">
                                          <label class="form-check-label" for="flexCheckChicken">
                                            Chicken Pox
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckThypoid">
                                          <label class="form-check-label" for="flexCheckThypoid">
                                            Thypoid
                                          </label>
                                        </div>
  
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="flexCheckNose">
                                          <label class="form-check-label" for="flexCheckNose">
                                            Nose Bleeding
                                          </label>
                                        </div>
                                      </div>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
  
                          <div class="col-md-12">
                            <hr>
                            <h6 class="bg-primary text-white p-2">Vital Signs</h6>
                            <form class="row g-2">
                              <div class="col-md-4">
                                <label for="bp" class="form-label">Blood Pressure</label>
                                <input type="text" class="form-control" name="bp" id="bp">
                              </div>
                              <div class="col-md-4">
                                <label for="temp" class="form-label">Temperature</label>
                                <input type="text" class="form-control" name="temp" id="temp">
                              </div>
                              <div class="col-md-4">
                                <label for="resrate" class="form-label">Respiratory
                                  Rate</label>
                                <input type="text" class="form-control" name="resrate" id="resrate">
                              </div>
                              <div class="col-md-4">
                                <label for="capref" class="form-label">Capillary
                                  Refill</label>
                                <input type="text" class="form-control" name="capref" id="capref">
                              </div>
                              <div class="col-md-4">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="text" class="form-control" name="weight" id="weight">
                              </div>
                              <div class="col-md-4">
                                <label for="pulrate" class="form-label">Pulse Rate</label>
                                <input type="text" class="form-control" name="pulrate" id="pulrate">
                              </div>
                            </form>
                          </div>
  
                          <div class="col-md-12">
                            <br>
                            <h6 class="bg-primary text-white p-2">Complaints</h6>
                            <form class="row">
                              <div class="col-md-2">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioTooth">
                                  <label class="form-check-label" for="flexRadioTooth">
                                    Toothache
                                  </label>
                                </div>
  
                                <div class="form-check ">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioLGF">
                                  <label class="form-check-label" for="flexRadioLGF">
                                    Low Grade Fever
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioBP">
                                  <label class="form-check-label" for="flexRadioBP">
                                    Body Pain
                                  </label>
                                </div>
                              </div>
  
                              <div class="col-md-2">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioLBM">
                                  <label class="form-check-label" for="flexRadioLBM">
                                    LBM
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioCut">
                                  <label class="form-check-label" for="flexRadioCut">
                                    Cut
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioWound">
                                  <label class="form-check-label" for="flexRadioWound">
                                    Wound
                                  </label>
                                </div>
                              </div>
  
                              <div class="col-md-5">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadioOthers">
                                  <label class="form-check-label" for="flexRadioOthers">
                                    Others
                                  </label>
                                </div>
                                <div class>
                                  <textarea class="form-control" id="others" rows="3" placeholder="Others..."></textarea>
                                </div>
                                <div class>
                                  <label>Select a Doctor</label>
                                  <select class="form-control" name="doctors">
                                    <option value="No Doctor">Dr. Cruz</option>
                                    <option value="No Doctor">Dr. Sy</option>
                                    <option value="No Doctor">Dr. Lee</option>
                                  </select>
                                </div>
                              </div>
  
                              <div class="col-md-3">
                                <div class>
                                  <div class="modal-footer text-right">
                                    <div class="container d-flex justify-content-start">
                                      <button type="submit" class="btn btn-icon icon-right btn-primary mr-5"><i
                                          class="fas fa-arrow-right"></i> Add to
                                        Doctor</button>
                                    </div>
                                  </div>
                                </div>
                                <div class>
                                  <div class="modal-footer text-right">
                                    <div class="container d-flex justify-content-start">
                                      <a class="nav-link" href="#2a" data-toggle="tab">
                                        <button type="button" class="btn btn-icon icon-right btn-primary mr-5"><i
                                            class="fas fa-arrow-right"></i>
                                          Diagnosis</button>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <hr>
                            <div class="modal-footer text-right">
                              <div class="container d-flex justify-content-end">
                                <button type="submit" class="btn btn-icon icon-left btn-primary mr-5">
                                  <i class="far fa-save"></i>
                                  Save
                                </button>
                                <button type="button" class="btn btn-icon icon-left btn-danger mr-5"
                                  data-dismiss="modal"><i class="fas fa-ban"></i>
                                  Cancel
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="2a">
                        <div class="row">
                          <div class="table col-md-12">
                            <div>
                              <form class="row g-2">
                                <div class="col-md-12">
                                  <label for="symptoms">Key Symptoms</label>
                                  <textarea class="form-control" id="symptoms" rows="10"></textarea>
  
                                </div>
                                <div class="col-md-12">
                                  <hr>
                                  <label for="initial" class="form-label">Initial
                                    Diagnosis</label>
                                  <input type="text" class="form-control" name="initial" id="initial">
                                </div>
                                <!-- table -->
                                <div class="col-md-12">
                                  <br>
                                  <h6 class="bg-primary text-white p-2">Laboratory Test</h6>
                                  <form class="row g-2">
                                    <div class="table-responsive">
                                      <table class="table table-bordered" id="table">
                                        <thead>
                                          <tr>
                                            <th class="text-primary text-center">
                                              Test</th>
                                            <th class="text-primary text-center">
                                              Action</th>
                                            <th class="text-primary text-center">
                                              Result</th>
                                            <th class="text-primary text-center">
                                              Observation/Conclusion/Explanation
                                            </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="col-md-3">
                                              <input type="text" class="form-control" name="labtest" id="labtest">
                                            </td>
                                            <td class="col-md-2">
                                              <input type="file" value="Upload a Document">
                                            </td>
                                            <td class="col-md-2">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioRow1"
                                                  id="flexRadio1">
                                                <label class="form-check-label" for="flexRadio1">
                                                  Normal
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioRow1"
                                                  id="flexRadio2">
                                                <label class="form-check-label" for="flexRadio2">
                                                  Not Normal
                                                </label>
                                              </div>
                                            </td>
                                            <td class="form-group col-md-5">
                                              <textarea class="form-control" id="observation" rows="3"></textarea>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-md-3">
                                              <input type="text" class="form-control" name="labtest" id="labtest">
                                            </td>
                                            <td class="col-md-2">
                                              <input type="file" value="Upload a Document">
                                            </td>
                                            <td class="col-md-2">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioRow2"
                                                  id="flexRadioRow2-1">
                                                <label class="form-check-label" for="flexRadioRow2-1">
                                                  Normal
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioRow2"
                                                  id="flexRadioRow2-2">
                                                <label class="form-check-label" for="flexRadioRow2-2">
                                                  Not Normal
                                                </label>
                                              </div>
                                            </td>
                                            <td class="form-group col-md-5">
                                              <textarea class="form-control" id="observation" rows="3"></textarea>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="col-md-3">
                                              <input type="text" class="form-control" name="labtest" id="labtest">
                                            </td>
                                            <td class="col-md-2">
                                              <input type="file" value="Upload a Document">
                                            </td>
                                            <td class="col-md-2">
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioRow3"
                                                  id="flexRadioRow3-1">
                                                <label class="form-check-label" for="flexRadioRow3-1">
                                                  Normal
                                                </label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flexRadioRow3"
                                                  id="flexRadioRow3-2">
                                                <label class="form-check-label" for="flexRadioRow3-2">
                                                  Not Normal
                                                </label>
                                              </div>
                                            </td>
                                            <td class="form-group col-md-5">
                                              <textarea class="form-control" id="observation" rows="3"></textarea>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <div>
                                        <label for="final" class="form-label">Final
                                          Diagnosis</label>
                                        <input type="text" class="form-control" name="final" id="final">
                                        <hr>
                                      </div>
                                      <div class="modal-footer text-right">
                                        <div class="container d-flex justify-content-end">
                                          <button type="submit" class="btn btn-icon icon-left btn-primary mr-5">
                                            <i class="far fa-save"></i>
                                            Save
                                          </button>
                                          <button type="button" class="btn btn-icon icon-left btn-danger mr-5"
                                            data-dismiss="modal"><i class="fas fa-ban"></i>
                                            Cancel
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                <!-- end table -->
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
  
                      <div class="tab-pane" id="3a">
                        <div class="row">
                          <div class="table col-md-12">
                            <div>
                              <form class="row g-2">
                                <div class="col-md-12">
                                  <label for="procedures">Procedures</label>
                                  <textarea class="form-control" id="procedures" rows="3"></textarea>
                                </div>
                                <div class="col-md-12">
                                  <br>
                                  <h6 class="bg-primary text-white p-2">Medication</h6>
                                  <form class="row g-2">
                                    <div class="row">
                                      <div class="col">
                                        <label>Medicine Classifications</label>
                                        <input type="text" class="form-control" aria-label="medicine">
                                      </div>
                                      <div class="col">
                                        <label>Brand Name</label>
                                        <input type="text" class="form-control" aria-label="brand">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label>Dosage</label>
                                        <input type="text" class="form-control" aria-label="dosage">
                                      </div>
                                      <div class="col">
                                        <label>Frequency</label>
                                        <input type="text" class="form-control" aria-label="frequency">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label>Duration</label>
                                        <input type="text" class="form-control" aria-label="duration">
                                      </div>
                                      <div class="col">
                                        <label>Quantity Dispense</label>
                                        <input type="text" class="form-control" aria-label="quantity">
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="modal-footer text-right">
                                      <div class="container d-flex justify-content-end">
                                        <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i
                                            class="far fa-save"></i>
                                          Save</button>
                                        <button type="button" class="btn btn-icon icon-left btn-danger mr-5"
                                          data-dismiss="modal"><i class="fas fa-ban"></i>
                                          Cancel</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </form>
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
        </div>
      </div>
    </div>
  </section>

@endsection
