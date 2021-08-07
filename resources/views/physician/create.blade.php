<div class="card uper">
  <div class="card-header">
    Add Physician Data
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
      <form method="post" action="{{ route('physician.store') }}">
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
              <label for="cases">Speciality:</label>
              <input type="text" class="form-control" name="speciality"/>     
          </div>

          <button type="submit" class="btn btn-primary">Add Physician</button>
      </form>
  </div>
</div>
<style>
  .uper {
    margin-top: 40px;
  }
</style>