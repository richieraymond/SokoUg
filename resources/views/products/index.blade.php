@extends('layouts.dashboard')

@section('content')
<a class="btn btn-outline-primary waves-effect" href="{{ url('products/create') }}" ><i class="fa fa-bolt"></i>Add New Product</a>
<table class="table table-responsive">
<thead>
    <tr>
      <th>#</th> 
      <th>Product Name</th> 
      <th>Descripion</th> 
      <th>Price</th> 
      <th>Quantity Available</th> 
      <th>Status</th>
      <th>Created At</th> 
      <th>Modified At</th> 
    </tr>
</thead>
<tbody>
    @php $count=1 @endphp
    @foreach($products as $product)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->qauntity }}</td>
        <td>{{ $product->status }}</td>
        <td>{{ $product->created_at }}</td>
        <td>{{ $product->updated_at }}</td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
