<div class="row">
  <div class="col-sm-12">
    <div class="card shadow mb-3">
      <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-2 bg-primary font-weight-bold text-white">Intervention</h4>
      </div>
      <div class="card-body bg-image card shadow-1-strong">
        <hr>
        <div class="table">
          <form action="{{ route('intervention.store') }}" method="post" class="row g-2">
            @csrf
            <div class="col-md-6">
              <label for="medicine" class="form-label text-primary">
                <h6>Medicine Name</h6>
              </label>
              <input type="text" class="form-control" name="medicine" id="medicine">
              <label for="medicine" class="form-label text-primary">
                <h6>Quantity</h6>
              </label>
              <input type="text" class="form-control" name="medicineQuantity" id="medicineQuantity">
              <hr>
              <label for="choiceslabelsdeprecated" class="form-label text-primary">
                <h6>Clinic Rest</h6>
                <h6>Sent Home</h6>
                <h6>Sent to Emergency Room</h6>
              </label>
            </div>
            <!-- <div class="col-md-6">
                 <label for="mqty" class="form-label text-primary"><h6>Quantity</h6></label>
                 <input type="number" class="form-control" name="mquantity" id="mquantity">
               </div> -->
            <div class="col-md-6">
              <label for="supply" class="form-label text-primary">
                <h6>Supply Name</h6>
              </label>
              <input type="text" class="form-control" name="supply" id="supply">
              <label for="supply" class="form-label text-primary">
                <h6>Quantity</h6>
              </label>
              <input type="text" class="form-control" name="supplyQuantity" id="supplyQuantity">
              <hr>
              </label>
            </div>
            <!-- <div class="col-md-6">
                 <label for="sqty" class="form-label text-primary"><h6>Quantity</h6></label>
                 <input type="number" class="form-control" name="squantity" id="squantity">
                 <br>
               </div> -->
            <!-- <div class="col-md-12">
                 <div class="form-check">
                 <input class="form-check-input" type="radio" name="intervention" value="intervention1"> 
                 <label class="form-check-label text-primary" for="female"><h6>Clinic Rest</h6></label>
                 </div>
                 input field hidden
                   <div class="intervention1 box" style="display:none">
                     <label for="minutes" class="form-label">Number of Minutes</label>
                     <input type="number" class="form-control" name="inter" id="minutes">
                     <label for="approve" class="form-label">Approved By:</label>
                     <input type="text" class="form-control" name="inter" id="approve">
                   </div>
          
                 <div class="form-check">
                 <input class="form-check-input" type="radio" name="intervention" value="intervention2"> 
                 <label class="form-check-label text-primary" for="female"><h6>Sent Home</h6></label>
                 </div>
                   input field hidden
                   <div class="intervention2 box" style="display:none">
                     <label for="approve" class="form-label">Approved By:</label>
                     <input type="text" class="form-control" name="inter" id="approve">
                   </div>
               
                 <div class="form-check">
                 <input class="form-check-input" type="radio" name="intervention" value="intervention3"> 
                 <label class="form-check-label text-primary" for="female"><h6>Sent To Emergency Room</h6></label>
                 </div>
               input field hidden
                   <div class="intervention3 box" style="display:none">
                     <label for="eroom" class="form-label">Emergency Room</label>
                     <input type="text" class="form-control" name="inter" id="eroom">
                     <label for="reroom" class="form-label">Emergency Room Refusal</label>
                     <input type="text" class="form-control" name="inter" id="reroom">
                     <label for="waiver" class="form-label">Signed Waiver</label>
                     <input type="file" class="form-control" name="inter" id="waiver">
                 </div> -->
                 <div class="col-md-12">
                  <hr>
                  <label for="eroom" class="form-label">Emergency Room</label>
                  <input type="text" class="form-control" name="inter" id="eroom">
                  <label for="reroom" class="form-label">Emergency Room Refusal</label>
                  <input type="text" class="form-control" name="inter" id="reroom">
                  <label for="waiver" class="form-label">Signed Waiver</label>
                  <input type="file" class="form-control" name="inter" id="waiver">
                 </div>
            <div class="col-md-4">
              <input type="hidden" class="form-control" name="consultation_id" id="consultation_id"
                value={{ $consultations->id }}>
            </div>
        </div>

        <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i class="far fa-save"></i>
          Save
        </button>

      </div>
      </form>


    </div>
  </div>
</div>
</div>
</div>
