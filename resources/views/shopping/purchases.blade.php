@extends('layouts.dashboard')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="pull-right">
          <a class="btn btn-primary" href="{{ url('/') }}">Continue Shopping</a>
        </span>
        </div>
        <div class="panel-body">
            <table id="simple-table" class="table  table-bordered table-hover">
              <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Orders</th>
                    <th>Descripion</th>
                    <th>Price(Per unit)</th>
                    <th>Quantity Ordered</th>
                    <th>Total Cost</th>
                    <th>Payment Method</th>
                    <th>Card Number</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Modified At</th>
                  </tr>
              </thead>
              <tbody>
                  @php $count=1 @endphp
                  @foreach($purchases as $order)
                  <tr>
                      <td>{{ $count++ }}</td>
                      <td>{{ $order->product->name }}</td>
                      <td>{{ $order->product->description }}</td>
                      <td>{{ $order->product->price }}</td>
                      <td>{{ $order->quantity }}</td>
                      <td>{{ $order->quantity*$order->product->price}}</td>
                      <td>{{ $order->payment->card_type }}</td>
                      <td>{{ $order->payment->card_no }}</td>
                      <td>{{ $order->status }}</td>
                      <td>{{ $order->created_at }}</td>
                      <td>{{ $order->updated_at }}</td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
    </div>
@endsection
