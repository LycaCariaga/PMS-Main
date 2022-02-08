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
                        <td>{{ $intervention->consultation_id }}</td>
                        <td>{{ $intervention->consultation->complaint }}</td>
                        <td>{{ $intervention->medicine }}</td>
                        <td>{{ $intervention->supply }}</td>  
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