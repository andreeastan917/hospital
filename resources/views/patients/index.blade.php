@include("pages.menu")
<div>
  <a href="{{ route('patients.create')}}" class="btn btn-primary">Adauga</a> 
</div>
<div class="uper">
  <!-- @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif -->
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Id</td>
          <td>Last Name</td>
          <td>First Name</td>
          <td>Sex</td>
          <td>Date Of Birth</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach($patients as $patient)
        <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->lastName}}</td>
            <td>{{$patient->firstName}}</td>
            <td>{{$patient->sex}}</td>
            <td>{{$patient->dateOfBirth}}</td>
            <td><a href="{{ route('patients.edit', $patient->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('patients.destroy', $patient->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>