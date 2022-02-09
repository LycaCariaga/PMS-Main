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
           
              @foreach ($patients as $patient)
              
              <div class="row-2">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$patient->id}}</h5>
        <h5>{{$patient->first_name}} {{$patient->middle_name}} {{$patient->last_name}}</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        @foreach ($consultations as $consultation)
        <h5>
        </h5>
        @endforeach
        <a href="#" class="btn btn-primary">Go somewhere</a>
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