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
        <div class="col-sm-3">
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
                  <a class="dropdown-item text-danger" href="#">Delete</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body ">
              <div class="text-center">

                <img src="{{ asset('img/avata.png') }}" class="img-fluid" style="max-width:50%" alt="">
              </div>

              <hr>
              <h4 class="text-primary text-center">{{ $patients->first_name }} {{ $patients->middle_name }}
                {{ $patients->last_name }} </h4>
              <h6>AGE: {{ $patients->getAge() }}</h6>
              <h6>DATE OF BIRTH: {{ $patients->birthday }}</h6>
              <h6>DEPARTMENT: {{ $patients->department->department }}</h6>
              <h6> MEDICAL HISTORY</h6>
              <h6>
                @foreach ((array) $patients->history as $value)
                  {{ $value }} |
                @endforeach

              </h6>
            </div>
          </div>
          <div class="card shadow mb-3">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h4 class="m-2 bg-primary font-weight-bold text-white">Consultations</h4>
              <div class="dropdown">
                <a class="dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-lg fa-fw text-white"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink"
                  style="">
                  <a class="dropdown-item text-primary" href="">Edit</a>
                  <a class="dropdown-item text-danger" href="#">Delete</a>
                </div>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body ">
              <div class="table-responsive">
                <table class="table table-bordered" id="table">
                  <thead>
                    <tr>
                      <th class="text-primary">Date</th>
                      <th class="text-primary text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2022-01-14 17:51:21</td>
                      <td>
                        <div class="d-flex justify-content-center">
                          <form action="{{ route('patient.initial') }}" method="get">
                            <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                class="fas fa-eye"></i>
                            </button>
                          </form>
                          <button type="submit" class="btn btn-icon icon-left btn-danger mr-3"><i
                              class="fas fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>2022-01-23 17:13:21</td>
                      <td>
                        <div class="d-flex justify-content-center">
                          <form action="" method="get">
                            <button type="submit" class="btn btn-icon icon-left btn-primary mr-3"><i
                                class="fas fa-eye"></i>
                            </button>
                          </form>
                          <button type="submit" class="btn btn-icon icon-left btn-danger mr-3"><i
                              class="fas fa-trash"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>

        </div>
        <div class="col lg-8">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
              <h4 class="m-2 bg-primary font-weight-bold text-white">Add Consultation</h4>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <div class="table">
              </div> 
            </div>  
          </div> 
        </div> 
         
      </div>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection
