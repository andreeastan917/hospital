@include("layouts.app")
<div class="card uper">
  <div class="card-header">
    Edit Patient Data
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
      <form method="post" action="{{ route('patients.update', $patients->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">First Name:</label>
              <input type="text" class="form-control" name="firstName" value="{{ $patients->firstName }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Last Name:</label>
              <input type="text" class="form-control" name="lastName" value="{{ $patients->lastName }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Sex:</label>
              <input type="text" class="form-control" name="sex" value="{{ $patients->sex}}"/>
              
          </div>
          <div class="form-group">
              <label for="cases">Date of Birth:</label>
              <input type="date" class="form-control" name="dateOfBirth" value="{{ $patients->dateOfBirth }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
      <div>
       <a href="{{ route('patients.index')}}" class="btn btn-primary">Back</a> 
  </div> 
  </div>
</div>

<style>
  .uper {
    margin-top: 40px;
  }
</style>