@include("layouts.app")
<div class="card uper">
  <div class="card-header">
    Add Product Data
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
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
          </div>

          <div class="form-group">
              <label for="cases">Product Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="cases">Unit Dosage:</label>
              <input type="text" class="form-control" name="unitDosage"/>     
          </div>

          <div class="form-group">
              <label for="cases">Unit Type:</label>
              <input type="text" class="form-control" name="unitType"/>     
          </div>

          <div class="form-group">
              <label for="cases">Quantity:</label>
              <input type="number" class="form-control" name="quantity"/>     
          </div>

          <div class="form-group">
              <label for="cases">Expire Date:</label>
              <input type="date" class="form-control" name="expireDate"/>     
          </div>

          <div class="form-group">
              <label for="cases">Prescription:</label>
              <input type="text" class="form-control" name="prescription"/>     
          </div>

          <div class="form-group">
              <label for="cases">Price:</label>
              <input type="number" step="any" class="form-control" name="price"/>     
          </div>

          <button type="submit" class="btn btn-primary">Add Product</button>
      </form>
      <div>
       <a href="{{ route('products.index')}}" class="btn btn-primary">Back</a> 
  </div> 
  </div>
</div>
