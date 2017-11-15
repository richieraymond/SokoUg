@extends('layouts.dashboard')

@section('content')
<a class="btn btn-outline-primary waves-effect" href="{{ url('products/create') }}" style="margin-bottom:5px;"><i class="fa fa-plus"></i>Add New Product</a>
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
      <th>Actions</th>
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
        <td><a href={{ url('wholesale/create?product_id='.$product->id) }} class="btn btn-outline-primary btn-sm">Avail on whole sale</a><a href={{ url('product/update/'.$product->id) }} class="btn btn-outline-primary btn-sm">Edit</a></td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
