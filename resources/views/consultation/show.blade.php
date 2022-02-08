@extends('layouts.app')

@section('content')
<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
<!-- scripts -->
  <section class="section">
    <div class="section-header">
      <h3 class="page__heading">Patient Management</h3>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-sm-4">
          <div class="card shadow mb-3">
          <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h4 class="m-2 bg-primary font-weight-bold text-white">Consultation</h4>
              </div>
          <div class="card-body bg-image card shadow-1-strong">
         
          <div class="table">
            <table>
            <tbody>
        
             <h5 class="text-primary">Consultation ID: {{ $consultations->id }}</h5>
             <h5 class="text-primary">Patient Name: {{ $consultations->patient->first_name }} {{ $consultations->patient->middle_name }}
            {{ $consultations->patient->last_name }}</h5>
              <h5 class="text-primary">Gender: {{ $consultations->patient->gender }} </h5>
              <tr>
              <hr>
              <td><h6 class="text-success">Date of Consultation: </h6></td>
              <td><h6>{{ $consultations->created_at ->format('F d, Y') }}</h6></td>

</tr>
<tr>
              <td><h6 class="text-success">Blood Pressure: </h6></td>
              <td><h6>{{ $consultations->BP }}</h6></td>
</tr>
<tr>
              <td><h6 class="text-success">Temperature: </h6></td>
              <td><h6>{{ $consultations->temp }}</h6></td>
              </tr>
<tr>
              <td><h6 class="text-success">Respiratory Rate: </h6></td>
              <td><h6>{{ $consultations->RR }}</h6></td>
              </tr>
<tr>
              <td><h6 class="text-success">Capillary Refill: </h6></td>
              <td><h6>{{ $consultations->CR }}</h6></td>
              </tr>
<tr>
              <td><h6 class="text-success">Weight: </h6></td>
              <td><h6>{{ $consultations->weight }}</h6></td>
              </tr>
<tr>
              <td><h6 class="text-success">Pulse Rate: </h6></td>
              <td><h6>{{ $consultations->PR }}</h6></td>
              </tr>
<tr>
              <td><h6 class="text-success">Complaint: </h6></td>
              <td><h6>{{ $consultations->complaint }}</h6></td>

</tr>
</tbody>
</table>
          </div>
        </div>
          </div>
        </div>
<!-- intervention section -->
        <div class="col-sm-8">
          <div class="card shadow mb-3">
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h4 class="m-2 bg-primary font-weight-bold text-white">Intervention</h4>
            </div>
            <div class="card-body bg-image card shadow-1-strong">
            <hr> 
            <div class="table"> 
                 
                 <form class="row g-2">
                 <div class="col-md-6">
                 <label for="medicine" class="form-label text-primary"><h6>Medicine Name</h6></label>
                 <input type="text" class="form-control" name="medicine" id="medicine">
               </div>

               <div class="col-md-6">
                 <label for="mqty" class="form-label text-primary"><h6>Quantity</h6></label>
                 <input type="number" class="form-control" name="mquantity" id="mquantity">
               </div>
               <div class="col-md-6">
                 <label for="supply" class="form-label text-primary"><h6>Supply Name</h6></label>
                 <input type="text" class="form-control" name="supply" id="supply">
               </div>
               <div class="col-md-6">
                 <label for="sqty" class="form-label text-primary"><h6>Quantity</h6></label>
                 <input type="number" class="form-control" name="squantity" id="squantity">
                 <br>
               </div>
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
                <hr>
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


      <div class="row">
        
      </div>


    </div>
  </section>
@endsection
