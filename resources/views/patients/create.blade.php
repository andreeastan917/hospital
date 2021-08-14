@include("layouts.app")
<div class="card uper">
  <div class="card-header">
    Add Patient Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('patients.store') }}">
          <div class="form-group">
              @csrf
          </div>

          <div class="form-group">
              <label for="cases">Last Name:</label>
              <input type="text" class="form-control" name="lastName"/>
          </div>

          <div class="form-group">
              <label for="cases">First Name:</label>
              <input type="text" class="form-control" name="firstName"/>     
          </div>

          <div class="form-group">
              <label for="cases">Sex:</label>
              <input type="text" class="form-control" name="sex"/>     
          </div>

          <div class="form-group">
              <label for="cases">Date Of Birth:</label>
              <input type="date" class="form-control" name="dateOfBirth"/>     
          </div>

          <button type="submit" class="btn btn-primary">Add Patient</button>
      </form>
      <div>
       <a href="{{ route('patients.index')}}" class="btn btn-primary">Back</a> 
  </div> 
  </div>
</div>
