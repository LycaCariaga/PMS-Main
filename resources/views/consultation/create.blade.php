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
              <form class="row">
                <div class="col-md-2">
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

                <div class="col-md-2">
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

                    <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i class="far fa-save"></i>
                      Save
                    </button>
              </form>
              </form>

              <button type="button" class="btn btn-icon icon-left btn-danger mr-5" data-dismiss="modal"><i
                  class="fas fa-ban"></i>Cancel</button>
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
