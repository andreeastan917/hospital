@include("pages.menu")

<div>
  <a href="{{ route('products.create')}}" class="btn btn-primary">Add Product</a> 
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
          <td>Product Name</td>
          <td>Unit Dosage</td>
          <td>Unit Type</td>
          <td>Quantity</td>
          <td>Expire Date</td>
          <td>Prescription</td>
          <td>Price</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->unitDosage}}</td>
            <td>{{$product->unitType}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->expireDate}}</td>
            <td>{{$product->prescription}}</td>
            <td>{{$product->price}}</td>
            <td><a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
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