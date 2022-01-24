<div class="row">
  <div class="col lg-8">
    <div class="card shadow mb-4">
      <!-- Card Header -->
      <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-2 bg-primary font-weight-bold text-white">View Consultation</h4>
      </div>
      <div class="card-body">
        <div class="table">
          <h5 class="text-primary">No Consultation?</h5>
          <table class="table table-bordered" id="table">
            <thead>
              <tr>
                <th class="text-primary">Id</th>
                <th class="text-primary">Created</th>
                <th class="text-primary">Updated</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($consultations as $consultation)
                @if ($patients->id == $consultation->patient_id)
                  <tr>
                    <td>{{ $consultation->patient_id }}</td>
                    <td>{{ $consultation->created_at }}</td>
                    <td>{{ $consultation->updated_at }}</td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
