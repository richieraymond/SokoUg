@extends('layouts.dashboard')

@section('content')
<a class="btn btn-outline-primary waves-effect" href="{{ url('/') }}" ><i class="fa fa-bolt"></i>Continue Shopping</a>
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
    @foreach($wishlists as $wishlist)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $wishlist->product_id }}</td>
        <td>{{ $wishlist->user_id }}</td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
