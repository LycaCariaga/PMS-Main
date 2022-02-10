@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Patient Chart</h3>
        </div>
        <div class="section-body">

          <div class="row">
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h4 class="m-2 bg-primary font-weight-bold text-white">Basic Information</h4>
         
                    </div>
                    <div class="card-body bg-image card shadow-1-strong" style="background-image: url('img/bg1.jpg'); ">
                        <div class="text-center">
                            <img src="{{ asset('img/avata.png') }}" class="img-fluid" style="max-width:50%" alt="">
                        </div>
                        
                        <br> 
                            <h4 class="text-primary"> Patient: <td>{{ $interventions->consultation->patient->first_name }} 
                                            {{ $interventions->consultation->patient->middle_name }} 
                                            {{ $interventions->consultation->patient->last_name }} </td></h4>
                            <h5 class="text-primary"> Intervention Id: <td>{{ $interventions->id }}</td></h5>
                            <hr>  
                            <h5><strong> Gender: </strong><td>{{ $interventions->consultation->patient->gender }}</td></h5>
                            <h5> <strong>Date of Birth: </strong> <td>{{ $interventions->consultation->patient->birthday}}</td></h5>
                            <h5> <strong>Department: </strong> <td>{{ $interventions->consultation->patient->department->department }}</td></h5>
                    </div> 
                </div>
            </div>
        
  <div class="col lg-8">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-2 bg-primary font-weight-bold text-white">Consultation</h4>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="table">
          <div class="row">
          <!-- <div class="col-md-12">
              <h6 class=" text-primary p-2">Medical History</h6>
<hr>

               
            </div> -->
            <div class="col-md-12">
              <h6 class=" text-primary p-2">Vital Signs</h6>
              <h6>Date of Consultation: {{ $interventions->consultation->created_at }}</h6>
              <h6>Blood Pressure: {{ $interventions->consultation->BP }}</h6>
              <h6>Temperature: {{ $interventions->consultation->temp }}</h6>
              <h6>Respiratory Rate: {{ $interventions->consultation->RR }}</h6>
              <h6>Capillary Refill: {{ $interventions->consultation->CR }}</h6>
              <h6>Weight: {{ $interventions->consultation->weight }}</h6>
              <h6>Pulse Rate: {{ $interventions->consultation->PR }}</h6>
<hr>

              
            </div>

            <div class="col-md-12">
              <h6 class=" text-primary p-2">Complaint</h6>
              <h6>Complaint: {{ $interventions->consultation->complaint }}</h6>
              <hr>
            </div>
            <div class="col-md-12">
              <h6 class=" text-primary p-2">Intervention</h6>
              <h6>Medicine Given: {{ $interventions->medicine }}</h6>
              <h6>Supply Given:  {{ $interventions->supply }}</h6>
<hr>
            </div>
          </div>
        </div>
    <!-- content1 end -->

        </div>
      </div>
    </div>
  </div>
</div>
</div>

      

           
        </div>

        <!-- sample -->
        
    </section>
@endsection


                        