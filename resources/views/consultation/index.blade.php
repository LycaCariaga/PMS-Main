@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <h3 class="page__heading">Patient Management</h3>
    </div>
    <div class="section-body">
      <div class="row">
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
              <div class="table-responsive">
                <table class="table table-bordered" id="table">
                  <thead>
                    <tr>
                      <th class="text-primary">Id</th>
                      <th class="text-primary">Patient Name</th>
                      <th class="text-primary">Date and Time Admitted</th>
                      <!-- <th class="text-primary">Blood Pressure</th>
                      <th class="text-primary text-center">Temperature</th>
                      <th class="text-primary text-center">Respiratory Rate</th>
                      
                      <th class="text-primary text-center">Capillary Refill</th>
                      <th class="text-primary text-center">Weight</th>
                      <th class="text-primary text-center">Pulse Rate</th> -->
                      <th class="text-primary text-center">Complaints</th>
                      <th class="text-primary text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($consultations as $consultation)
                      <tr>
                        <td>{{ $consultation->id }}</td>
                        <td>{{ $consultation->patient->first_name }} {{ $consultation->patient->middle_name }} {{ $consultation->patient->last_name }}</td>
                        <td>{{ $consultation->created_at }}</td>
                        
                        <td>{{ $consultation->complaint }}</td>
                        <td>
                        <form action="{{ route('consultation.show', $consultation->id) }}" method="get">
                              @csrf
                              <button type="submit" class="btn btn-icon icon-left btn-primary mr-3">
                               Intervention
                              </button>
                            </form>
                            </td>
                            
                        </tr>
                     @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection