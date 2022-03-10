<div class="row">
  <div class="col lg-8">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-2 bg-primary font-weight-bold text-white">Add Consultation</h4>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="table">
          <div class="row">
            <div class="col-md-12">
              <h6 class="bg-primary text-white p-2">Vital Signs</h6>
              <form action="{{ route('consultation.store') }}" method="post" class="row g-2">
                @csrf

                <div class="col-md-4">
                  <label for="bp" class="form-label">Blood Pressure</label>
                  <input type="text" class="form-control" name="BP" id="BP" required>
                </div>

                <div class="col-md-4">
                  <label for="temp" class="form-label">Temperature</label>
                  <input type="text" class="form-control" name="temp" id="temp" required>
                </div>
                <div class="col-md-4">
                  <label for="resrate" class="form-label">Respiratory
                    Rate</label>
                  <input type="text" class="form-control" name="RR" id="RR" required>
                </div>
                <div class="col-md-4">
                  <label for="capref" class="form-label">Capillary
                    Refill</label>
                  <input type="text" class="form-control" name="CR" id="CR" required>
                </div>
                <div class="col-md-4">
                  <label for="weight" class="form-label">Weight</label>
                  <input type="text" class="form-control" name="weight" id="weight" required>
                </div>
                <div class="col-md-4">
                  <label for="pulrate" class="form-label">Pulse Rate</label>
                  <input type="text" class="form-control" name="PR" id="PR" required>
                </div>

                {{-- hindi napapass yung patient-id kase wala nmn dito sa form. so eto yung workaround natin. --}}
                <div class="col-md-4">
                  <input type="hidden" class="form-control" name="patient_id" id="patient_id"
                    value={{ $patients->id }} required>
                </div>
            </div>

            <div class="col-md-12">
              <br>
              <h6 class="bg-primary text-white p-2">Complaints</h6>
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-minor-tab" data-toggle="pill" href="#pills-minor" role="tab"
                    aria-controls="pills-minor" aria-selected="true">Minor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-severe-tab" data-toggle="pill" href="#pills-severe" role="tab"
                    aria-controls="pills-severe" aria-selected="false">Severe</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-minor" role="tabpanel"
                  aria-labelledby="pills-minor-tab">
                  <form class="row">
                    <div class="col-md-auto">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="complaint" onClick="regularComplaint()"
                          id="flexRadioTooth" value="Toothache" required>
                        <label class="form-check-label" for="flexRadioTooth">
                          Toothache
                        </label>
                      </div>

                      <div class="form-check ">
                        <input class="form-check-input" type="radio" name="complaint" onClick="regularComplaint()"
                          id="flexRadioLGF" value="Low Grade Fever" required>
                        <label class="form-check-label" for="flexRadioLGF">
                          Low Grade Fever
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="complaint" onClick="regularComplaint()"
                          id="flexRadioBP" value="Body Pain" required>
                        <label class="form-check-label" for="flexRadioBP">
                          Body Pain
                        </label>
                      </div>
                    </div>

                    <div class="col-md-auto">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="complaint" onClick="regularComplaint()"
                          id="flexRadioLBM" value="LBM" required>
                        <label class="form-check-label" for="flexRadioLBM">
                          LBM
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="complaint" onClick="regularComplaint()"
                          id="flexRadioCut" value="Cut" required>
                        <label class="form-check-label" for="flexRadioCut">
                          Cut
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="complaint" onClick="regularComplaint()"
                          id="flexRadioWound" value="Wound" required>
                        <label class="form-check-label" for="flexRadioWound">
                          Wound
                        </label>
                      </div>
                      {{-- <div class="form-check form-check-inline">
                        <label onClick="otherFruit()">
                          <input class="form-check-input" type="radio" name="complaint" id="other_complaint" value="other">
                          <input type="text" name="complaint" id="other_text" />
                        </label>
    
                      </div> --}}
                    </div>
                    <div class="modal-footer text-right">
                      <div class="container d-flex justify-content-end">

                        <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i
                            class="far fa-save"></i>
                          Save
                        </button>
                        <button type="button" class="btn btn-icon icon-left btn-danger mr-5" data-dismiss="modal"><i
                            class="fas fa-ban"></i>Cancel
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-severe" role="tabpanel" aria-labelledby="pills-severe-tab">
                  <form>
                    <div class="form-group row">
                      <label for="signssymptoms" class="col-sm-2 col-form-label">Signs & Symptoms</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="signssymptoms" name="signssymptoms" required>
                      </div>
                    </div>
                    <hr>
                    <label class="col-sm-6">Describe the following:</label>

                    <div class="form-group row">
                      <label for="onset" class="col-sm-2 col-form-label"> • Onset</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="onset" name="onset">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="provoke" class="col-sm-2 col-form-label"> • Provoke</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="provoke" name="provoke">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="quality" class="col-sm-2 col-form-label"> • Quality</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quality" name="quality">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="severity" class="col-sm-2 col-form-label"> • Severity</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="severity" name="severity">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="time" class="col-sm-2 col-form-label"> • Time</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="time" name="time">
                      </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                      <label for="allergies" class="col-sm-2 col-form-label">Allergies</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="allergies" name="allergies">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pastmedication" class="col-sm-2 col-form-label">Past Medications</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="pastmedication" name="pastmedication">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="lastmeal" class="col-sm-2 col-form-label">Last Meal</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="lastmeal" name="lastmeal">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="eventsemergency" class="col-sm-2 col-form-label">Events leading up to
                        Emergency</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="eventsemergency" name="eventsemergency">
                      </div>
                    </div>

                    <hr>

                    <div class="form-group row">
                      <label for="reqformlab" class="col-sm-2 col-form-label">Request Form for Labtest</label>
                      <div class="col-sm-6">
                        <input type="file" class="form-control-plaintext" id="reformlab" name="reqformlab">
                      </div>
                    </div>

                    <hr>

                    <label for="listtest" class="col-sm-2 col-form-label">List of needed tests: </label>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="CBC" value="">
                      <label class="form-check-label" for="CBC">
                        CBC
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="xray" value="">
                      <label class="form-check-label" for="xray">
                        X-ray
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="drug" value="">
                      <label class="form-check-label" for="drug">
                        Drug Test
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="fecal" value="">
                      <label class="form-check-label" for="fecal">
                        Fecalysis
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="urinal" value="">
                      <label class="form-check-label" for="urinal">
                        Urinalysis
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="rt-pcr" value="">
                      <label class="form-check-label" for="rt-pcr">
                        RT-PCR Test
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="antigen" value="">
                      <label class="form-check-label" for="antigen">
                        Antigen Test
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="listtest[]" id="ct" value="">
                      <label class="form-check-label" for="ct">
                        CT-scan
                      </label>
                    </div>
                    <div class="form">
                      <label class="col-sm-auto" for="others">Others, please specify: </label>
                      <input class="form-check-input col-sm-auto" type="text" name="listtest[]" id="others">
                    </div>

                    <div class="modal-footer text-right">
                      <div class="container d-flex justify-content-end">
                        <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i
                            class="far fa-save"></i>
                          Send to Doctor
                        </button>
                        <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i
                            class="far fa-save"></i>
                          Send to Nurse
                        </button>
                        <button type="button" class="btn btn-icon icon-left btn-danger mr-5" data-dismiss="modal"><i
                            class="fas fa-ban"></i>Cancel
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              </form>
            </div>
          </div>
        </div>
        <!-- content1 end -->

        <script>
          function otherComplaint() {
            a = document.getElementById('other_complaint');
            a.checked = true;
          }

          function regularFruit() {
            a = document.getElementById('other_text');
            a.value = "";
          }
        </script>

      </div>
    </div>
  </div>
</div>
</div>
</div>
