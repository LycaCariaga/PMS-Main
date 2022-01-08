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
                        <a class="" href="{{route('patient.create')}}">
                            <button type="button" class="btn btn-primary btn-sm mr-5 p-2">
                            Add Patient
                            </button>
                            </a> 
                            <span class="pr-5"></span>   
                        </div> 
                        <div class="card-header d-flex justify-content-start">
                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control" placeholder="Search"/>   
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
                                            <th class="text-primary text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Lyca Cariaga</td>
                                            <td>12/11/21</td>
                                            <td>Female</td>
                                            <td>08/22/99</td>
                                            <td>IT</td>
                                        </tr>
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
