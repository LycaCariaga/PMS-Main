@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Default</h3>
        </div>
        <div class="section-body">

          <div class="row">
          <div class="card-body bg-image card shadow-1-strong"  style="background-image: url('img/bg1.jpg'); ">
              <div class="text-center">

                <img src="{{ asset('img/avata.png') }}" class="img-fluid" style="max-width:50%" alt="">
              </div>

              <hr>
              @foreach ($consultations as $consultation) 
           
          <h6>ID: {{ $consultation->id }}</h6>
            <h6>Full Name: {{ $consultation->patient->first_name }} {{ $consultation->patient->middle_name }} {{ $consultation->patient->last_name }}</h6>
            <h6>Gender: {{ $consultation->patient->gender }}</h6>
            <h6>Date of Consultation: {{ $consultation->created_at }}</h6>
            <h6>Blood Pressure: {{ $consultation->BP }}</h6>
            <h6>Temperature: {{ $consultation->temp }}</h6>
            <h6>Respiratory Rate: {{ $consultation->RR }}</h6>
            <h6>Capillary Refill: {{ $consultation->CR}}</h6>
            <h6>Weight: {{ $consultation->weight }}</h6>
            <h6>Pulse Rate: {{ $consultation->PR }}</h6>
            <h6>Complaint: {{ $consultation->complaint }}</h6>
         
            @endforeach
            </div>
          </div>

           
        </div>
    </section>
@endsection



