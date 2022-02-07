@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <h3 class="page__heading">Default</h3>
    </div>
    <div class="section-body">

      <div class="row">
        <div class="card-body bg-image card shadow-1-strong" style="background-image: url('img/bg1.jpg'); ">
          <div class="text-center">

            <img src="{{ asset('img/avata.png') }}" class="img-fluid" style="max-width:50%" alt="">
          </div>

          <hr>
          <h6>ID: {{ $consultations->id }}</h6>
          <h6>Full Name: {{ $consultations->patient->first_name }} {{ $consultations->patient->middle_name }}
            {{ $consultations->patient->last_name }}</h6>
          <h6>Gender: {{ $consultations->patient->gender }}</h6>
          <h6>Date of Consultation: {{ $consultations->created_at }}</h6>
          <h6>Blood Pressure: {{ $consultations->BP }}</h6>
          <h6>Temperature: {{ $consultations->temp }}</h6>
          <h6>Respiratory Rate: {{ $consultations->RR }}</h6>
          <h6>Capillary Refill: {{ $consultations->CR }}</h6>
          <h6>Weight: {{ $consultations->weight }}</h6>
          <h6>Pulse Rate: {{ $consultations->PR }}</h6>
          <h6>Complaint: {{ $consultations->complaint }}</h6>
        </div>
      </div>


    </div>
  </section>
@endsection
