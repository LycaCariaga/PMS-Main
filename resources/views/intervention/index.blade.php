@extends('layouts.app')

@section('content')

  <section class="section">
    <div class="section-header">
      <h3 class="page__heading">Patient Management</h3>
    </div>
    <div class="section-body">
      <div class="row-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex justify-content-start">
              <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Search" />
              </div>
              <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
              </button>
            </div>

            <div class="card-body">
              <!-- <div class="table-responsive">
                <table class="table table-bordered" id="table">
                  <thead>
                    <tr>
                      <th class="text-primary">Id</th>
                      <th class="text-primary">Patient</th>
                      <th class="text-primary">Consultation Id</th>
                      <th class="text-primary">Complaint</th>
                      <th class="text-primary">Medicine</th>
                      <th class="text-primary">Supply</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($interventions as $intervention)
                      <tr>
                        <td>{{ $intervention->id }}</td>
                        <td>{{$intervention->consultation->patient->first_name}} </td>
                        <td>{{ $intervention->consultation_id }}</td>
                        <td>{{ $intervention->consultation->complaint }}</td>
                        <td>{{ $intervention->medicine }}</td>
                        <td>{{ $intervention->supply }}</td>  
                        </tr>
                     @endforeach
                  </tbody>
                </table>
              </div> -->

             
              @foreach ($interventions as $intervention)
       
              <div class="row-2">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-primary">{{$intervention->consultation->patient->first_name}} 
          {{$intervention->consultation->patient->middle_name}} 
          {{$intervention->consultation->patient->last_name}} </h5>
          <h6>Complaint: {{ $intervention->consultation->complaint }}</h6>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <!-- <a href="#" class="btn btn-primary">View Details</a> -->
        <form action="{{ route('intervention.show', $intervention->id) }}" method="get">
                              @csrf
                              <button type="submit" class="btn btn-icon icon-left btn-primary mr-3">
                              View Details
                              </button>
                            </form>
                            </td>
                            
      </div>
    </div>
  </div>
     
            @endforeach
         
          </div>
        </div>
      </div>
    </div>
   
  </section>
@endsection