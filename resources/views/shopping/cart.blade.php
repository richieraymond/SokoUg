@extends('layouts.dashboard')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ Cart::count() }}
            <span class="pull-right">
          <a class="btn btn-primary" href="{{ url('/') }}">Continue Shopping</a>
          <a class="btn btn-primary" href="{{ url('checkout/create') }}">Proceed to check out</a>
        </span>
        </div>
        <div class="panel-body">
            <table id="simple-table" class="table  table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price Per Item</th>
                    <th>Total Cost</th>
                    <th>Actions</th>
                </tr>
                </thead>

                    @php  $count = 1; @endphp
                    @foreach (Cart::content() as $cartitem)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $cartitem->name }}</td>
                            <td>{{ $cartitem->qty }}</td>
                            <td>{{ $cartitem->price }}</td>
                            <td>{{ $cartitem->price*$cartitem->qty }}</td>
                            <td><a href="{{ url('cart/destroy/'.$cartitem->rowId) }}"class="btn btn-sm btn-outline-primary mt-1">Remove from cart</a></td>
                        </tr>
                    @endforeach



            </table>
        </div>
    </div>
@endsection
