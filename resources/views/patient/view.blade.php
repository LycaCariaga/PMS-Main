@extends('layouts.app')

@section('content')
  <section class="section">

    <div class="section-header">
      <h3 class="page__heading">Patient Management</h3>
    </div>
    <div class="section-body">
      <div class="card-header d-flex justify-content-start">
        <a class="" href="{{ route('patient.index') }}">
          <button type="button" class="btn btn-primary btn-sm mr-5 p-2">
            Go Back To List
          </button>
        </a>
        <span class="pr-5"></span>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card shadow mb-3">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h4 class="m-2 bg-primary font-weight-bold text-white">Patient Record</h4>
              <div class="dropdown">
                <a class="dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-lg fa-fw text-white"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink"
                  style="">
                  <a class="dropdown-item text-primary"
                    href="{{ route('patient.edit', ['id' => $patients->id]) }}">Edit</a>
                  <!-- <a class="dropdown-item text-danger" href="{{ route('patient.delete', $patients->id) }}">Delete</a> -->
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-image card shadow-1-strong" style="background-image: url('img/bg1.jpg'); ">
              <div class="text-center">

                <img src="{{ asset('img/avata.png') }}" class="img-fluid" style="max-width:50%" alt="">
              </div>

              <hr>
              <h4 class="text-primary text-center">{{ $patients->first_name }}
                {{ $patients->middle_name }}
                {{ $patients->last_name }} </h4>
              <h6>AGE: {{ $patients->getAge() }}</h6>
              <h6>DATE OF BIRTH: {{ $patients->birthday }}</h6>
              <h6>DEPARTMENT: {{ $patients->department->department }}</h6>
              <h6> MEDICAL HISTORY</h6>
              <h6>
                @foreach ((array) $patients->history as $value)
                  @if ($value != 'others')
                    {{ $value }} |
                  @endif
                @endforeach
                {{ $patients->history_others }}
              </h6>
            </div>
          </div>
          <div class="card shadow mb-3">
            <!-- Card Header -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h4 class="m-2 bg-primary font-weight-bold text-white">Consultation List</h4>
            </div>
            <div class="card-body">
              <div class="table">
                <table class="table table-bordered" id="table">
                  <thead>
                    <tr>

                      <th class="text-primary">Date and Time</th>
                      <th class="text-primary">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($consultations as $consultation)
                      @if ($patients->id == $consultation->patient_id)
                        <tr>

                          <td>{{ $consultation->created_at->format('F d, Y \a\t H:i:s') }}</td>
                          <td>
                            <div>

                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                data-target="#yourModal{{ $consultation->id }}">
                                View
                              </button>

                            </div>
                          </td>
                          <td>
                            {{-- <form action="{{ route('consultation.show', $consultation->id) }}" method="get">
                              @csrf
                              <button type="submit" class="btn btn-icon icon-left btn-primary mr-3">
                                Intervention
                              </button>
                            </form> --}}
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- create consultation -->
        <div class="col lg-8">
          @yield('content')
          @include('consultation.create')
        </div>
      </div>
    </div>


    </div>
  </section>
  <!-- Modal -->
  @foreach ($consultations as $consultation)
    @foreach ($interventions as $intervention)
      <div class="modal fade" id="yourModal{{ $consultation->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-white" id="myModalLabel"></h4>

            </div>
            <div class="modal-body">

              @if ($patients->id == $consultation->patient_id)
                <h6>ID: {{ $consultation->id }}</h6>
                <h6>Full Name: {{ $consultation->patient->first_name }}
                  {{ $consultation->patient->middle_name }}
                  {{ $consultation->patient->last_name }}</h6>
                <h6>Date of Consultation: {{ $consultation->created_at }}</h6>
                <h6>Blood Pressure: {{ $consultation->BP }}</h6>
                <h6>Temperature: {{ $consultation->temp }}</h6>
                <h6>Respiratory Rate: {{ $consultation->RR }}</h6>
                <h6>Capillary Refill: {{ $consultation->CR }}</h6>
                <h6>Weight: {{ $consultation->weight }}</h6>
                <h6>Pulse Rate: {{ $consultation->PR }}</h6>
                <h6>Complaint: {{ $consultation->complaint }}</h6>
                <hr>
                <h6>Medicine: {{ $intervention->medicine }}</h6>
                <h6>Supply: {{ $intervention->supply }}</h6>
              @endif

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endforeach

  {{-- bkt may pagala galang /div dito --}}
  </div>

  </div>
  </div>
  </div> -->



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection
