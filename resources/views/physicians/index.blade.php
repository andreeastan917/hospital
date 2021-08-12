@include("pages.menu")

<div>
  <a href="{{ route('physicians.create')}}" class="btn btn-primary">Add Physician</a> 
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
          <td>Speciality</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach($physicians as $physician)
        <tr>
            <td>{{$physician->id}}</td>
            <td>{{$physician->lastName}}</td>
            <td>{{$physician->firstName}}</td>
            <td>{{$physician->speciality}}</td>
            <td><a href="{{ route('physicians.edit', $physician->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('physicians.destroy', $physician->id)}}" method="post">
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