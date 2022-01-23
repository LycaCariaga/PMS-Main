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
            <div class="card-header d-flex justify-content-end">
              <a class="" href="{{ route('patient.create') }}">
                <button type="button" class="btn btn-primary btn-sm mr-5 p-2">
                  Add Patient
                </button>
              </a>
              <span class="pr-5"></span>
            </div>
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
                      <th class="text-primary">Full Name</th>
                      <th class="text-primary">Date and Time Admitted</th>
                      <th class="text-primary">Gender</th>
                      <th class="text-primary text-center">B-Day</th>
                      <th class="text-primary text-center">Department</th>
                      
                      <th class="text-primary text-center">Medical History</th>
                      <th class="text-primary text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($patients as $patient)
                      <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->first_name }} {{ $patient->middle_name }} {{ $patient->last_name }}</td>
                        <td>{{ $patient->created_at }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->birthday }}</td>
                        <td>{{ $patient->department->department }}</td>
                       
                        <td>
                          {{-- {{ print_r($patient->history) }} --}}
                          {{-- @foreach ($patient->history as $value)
                                        {{$value}},
                                        @endforeach --}}
                          @foreach ((array) $patient->history as $value)
                            {{ $value }},
                          @endforeach

                        </td>
                        <td>
                          <div class="d-flex justify-content-center">
                            <form action="{{ route('patient.view', $patient->id) }}" method="get">
                              @csrf
                              <button type="submit"
                                  class="btn btn-icon icon-left btn-primary mr-3"><i class="fas fa-eye"></i>
                              </button>
                            </form>
                           <form action="{{ route('patient.delete', $patient->id) }}" method="post">
                              @csrf
                            <button type="submit" class="btn btn-icon icon-left btn-danger mr-3"><i
                                class="fas fa-trash"></i>
                            </button>
                            </form>
                           
                          </div>
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

