

          <div class="row">
            <div class="col lg-8">
                <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                    <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h4 class="m-2 bg-primary font-weight-bold text-white">Add Consultation</h4>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                    <div class="table">
                    <div id="exTab1">
                        <ul class="nav nav-pills">
                        <li class="active">
                            <a class="nav-link " href="#1a" data-toggle="tab">Initial Assessment</a>
                        </li>
                        <li>
                            <a class="nav-link " href="#2a" data-toggle="tab">Diagnosis</a>
                        </li>
                        <li>
                            <a class="nav-link " href="#3a" data-toggle="tab">Treatment</a>
                        </li>
                        </ul>

            <!-- tab content1 -->
            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h6 class="bg-primary text-white p-2">Vital Signs</h6>
                                    <form action="{{ route('consultation.store') }}" method="post" class="row g-2">
                                    @csrf 
                                      
                                        <div class="col-md-4">
                                        <label for="bp" class="form-label">Blood Pressure</label>
                                        <input type="number" class="form-control" name="BP" id="BP">
                                        </div>

                                        <div class="col-md-4">
                                        <label for="temp" class="form-label">Temperature</label>
                                        <input type="number" class="form-control" name="temp" id="temp">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="resrate" class="form-label">Respiratory
                                            Rate</label>
                                        <input type="number" class="form-control" name="RR" id="RR">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="capref" class="form-label">Capillary
                                            Refill</label>
                                        <input type="number" class="form-control" name="CR" id="CR">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="weight" class="form-label">Weight</label>
                                        <input type="text" class="form-control" name="weight" id="weight">
                                        </div>
                                        <div class="col-md-4">
                                        <label for="pulrate" class="form-label">Pulse Rate</label>
                                        <input type="number" class="form-control" name="PR" id="PR">
                                        </div>
                                   
                                    </div>

                                    <div class="col-md-12">
                                    <br>
                                    <h6 class="bg-primary text-white p-2">Complaints</h6>
                                    <form class="row">
                                        <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="complaint" id="complaint">
                                            <label class="form-check-label" for="flexRadioTooth">
                                            Toothache
                                            </label>
                                        </div>

                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="complaint" id="complaint">
                                            <label class="form-check-label" for="flexRadioLGF">
                                            Low Grade Fever
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="complaint" id="complaint">
                                            <label class="form-check-label" for="flexRadioBP">
                                            Body Pain
                                            </label>
                                        </div>
                                        </div>

                                        <div class="col-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="complaint" id="complaint">
                                            <label class="form-check-label" for="flexRadioLBM">
                                            LBM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="complaint" id="complaint">
                                            <label class="form-check-label" for="flexRadioCut">
                                            Cut
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="complaint" id="complaint">
                                            <label class="form-check-label" for="flexRadioWound">
                                            Wound
                                            </label>
                                        </div>
                                        </div>
                                        <div class="modal-footer text-right">
                                        <div class="container d-flex justify-content-end">
                                            
                                            <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i class="far fa-save"></i>
                                            Save
                                            </button>
                                            </form>
                                            </form>
                                            
                                            <button type="button" class="btn btn-icon icon-left btn-danger mr-5" data-dismiss="modal"><i class="fas fa-ban"></i>Cancel</button>
                                        </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                </div>
            <!-- content1 end -->

                    </div>
                    </div>
                    </div>
                </div>
            </div>
</div>         

