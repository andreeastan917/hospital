@include("layouts.app")
<div class="card uper">
  <div class="card-header">
    Edit Physician Data
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
      <form method="post" action="{{ route('physicians.update', $physicians->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">First Name:</label>
              <input type="text" class="form-control" name="firstName" value="{{ $physicians->firstName }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Last Name:</label>
              <input type="text" class="form-control" name="lastName" value="{{ $physicians->lastName }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Speciality:</label>
              <input type="text" class="form-control" name="speciality" value="{{ $physicians->sex}}"/>
              
          </div>
        
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
      <div>
       <a href="{{ route('physicians.index')}}" class="btn btn-primary">Back</a> 
  </div> 
  </div>
</div>

<style>
  .uper {
    margin-top: 40px;
  }
</style>