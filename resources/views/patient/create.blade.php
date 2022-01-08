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
             <div class="card-header d-flex justify-content-start bg-primary">
              <div>
               <h5 class = "ml-5 mb-0 text-white">Basic Information</h5>
              </div>
             </div>

        <div class="card-body">  
          <div class="table"> 
            <form class="row g-2">

              <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control" name="lastname" id="lastname">
              </div>

              <div class="col-md-6">
                <label for="birthday" class="form-label">Birthday</label>
                  <input type="date" class="form-control" name="birthday" id="birthday">
              </div> 

              <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="firstname" id="firstname">
              </div>

              <div class="col-md-6">
                <label>Department</label>
                  <select class="form-control" name="department">
                      <option value="No Role">IT</option>
                      <option value="No Role">HR</option> 
                      <option value="No Role">Finance</option> 
                  </select>
              </div>

              <div class="col-md-6">
                <label for="middlename" class="form-label">Middle Name</label>
                  <input type="text" class="form-control" name="middlename" id="middlename">
              </div>

              <div class="col-md-6">
                <label>Gender</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender">
                      <label class="form-check-label" for="gender">
                        Male
                      </label>
                  </div>
              
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender">
                  <label class="form-check-label" for="gender">
                    Female
                  </label>
              </div>

              
     
          </div>
        </form>
      </div>
    </div> 
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex justify-content-start bg-primary">
            <div>
              <h5 class = "ml-5 mb-0 text-white">Medical History</h5>
            </div>
          </div>
        <div class="card-body">
          <div class="table"> 
            <form class="row g-2">
              <ul>
               <div class="mx-auto" style="width: 200px;">   
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Diabetes
                    </label>
                </div>
                  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Heart Disease
                    </label>
                </div>
                  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Allergy
                    </label>
                </div>
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                       Measles
                      </label>
                </div>
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Asthma
                      </label>
                </div>   
              </div>
            </ul>
                 
            <ul>
              <div class="mx-auto" style="width: 200px;">  
               <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                   Hepatitis
                  </label>
              </div>
                  
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                   Seizures
                  </label>
              </div>
                  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Scoliosis
                    </label>
                </div>
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Primary Pulmonary Infection
                      </label>
                </div>
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Otitis External/Media
                      </label>
                </div>   
              </div>
            </ul>

            <ul>
              <div class="mx-auto" style="width: 200px;">    
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Urinary Track Infection
                    </label>
                </div>
                  
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                   Mumps
                  </label>
              </div>
                  
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Chicken Pox
                    </label>
                </div>
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Thypoid
                      </label>
                </div>
                    
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        Nose Bleeding
                      </label>
                </div>   
              </div>
            </ul>
          </form>

          <div class="modal-footer text-right">
            <div class="container d-flex justify-content-end">
              <button type="submit" class="btn btn-icon icon-left btn-primary mr-5"><i
                class="far fa-save"></i> Save</button>
                  <button type="button" class="btn btn-icon icon-left btn-danger mr-5"
                    data-dismiss="modal"><i class="fas fa-ban"></i>Cancel</button>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
</div>
</section>
        
@endsection

