@extends('layouts.dashboard')

@section('content')
<a class="btn btn-outline-secondary waves-effect" href="{{ url('orders/') }}" ><i class="fa fa-bolt"></i>All Orders</a>
<a class="btn btn-outline-primary waves-effect" href="{{ url('approvedorders') }}" ><i class="fa fa-bolt"></i>Approved Orders</a>
<a class="btn btn-outline-warning waves-effect" href="{{ url('pendingorders') }}" ><i class="fa fa-bolt"></i>Pending Orders</a>
<a class="btn btn-outline-danger waves-effect" href="{{ url('canceledorders') }}" ><i class="fa fa-bolt"></i>canceled Orders</a>

<table class="table table-responsive">
<thead>
    <tr>
      <th>#</th> 
      <th>Product Orders</th> 
      <th>Descripion</th> 
      <th>Price(Per unit)</th> 
      <th>Quantity Ordered</th> 
      <th>Total Cost</th>
      <th>Status</th>
      <th>Created At</th> 
      <th>Modified At</th> 
    </tr>
</thead>
<tbody>
    @php $count=1 @endphp
    @foreach($orders as $order)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $order->product->name }}</td>
        <td>{{ $order->product->description }}</td>
        <td>{{ $order->product->price }}</td>
        <td>{{ $order->quantity }}</td>
        <td>{{ $order->quantity*$order->product->price}}</td>
        <td>{{ $order->status }}</td>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->updated_at }}</td>
    </tr>
    @endforeach
</tbody>
</table>

@endsection
