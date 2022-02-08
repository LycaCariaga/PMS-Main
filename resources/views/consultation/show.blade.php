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
        <div class="col lg-8">
          @yield('content')
          @include('intervention.create')
        </div>

    </div>



    </div>
  </section>
@endsection
