@include("layouts.app")
<div class="card uper">
  <div class="card-header">
    Edit Product Data
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
      <form method="post" action="{{ route('products.update', $products->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Product Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $products->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Unit Dosage:</label>
              <input type="text" class="form-control" name="unitDosage" value="{{ $products->unitDosage }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Unit Type:</label>
              <input type="text" class="form-control" name="unitType" value="{{ $products->unitType}}"/> 
          </div>
          <div class="form-group">
              <label for="cases">Quantity:</label>
              <input type="number" class="form-control" name="quantity" value="{{ $products->quantity}}"/> 
          </div>
          <div class="form-group">
              <label for="cases">Expire Date:</label>
              <input type="date" class="form-control" name="expireDate" value="{{ $products->expireDate}}"/> 
          </div>
          <div class="form-group">
              <label for="cases">Prescription:</label>
              <input type="text" class="form-control" name="prescription" value="{{ $products->prescription}}"/> 
          </div>
          <div class="form-group">
              <label for="cases">Price:</label>
              <input type="number" step="any" class="form-control" name="price" value="{{ $products->price}}"/> 
          </div>
        
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
      <div>
       <a href="{{ route('products.index')}}" class="btn btn-primary">Back</a> 
  </div> 
  </div>
</div>

<style>
  .uper {
    margin-top: 40px;
  }
</style>