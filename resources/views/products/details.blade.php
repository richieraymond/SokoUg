@extends('layouts.shop')
@section('content')
@foreach($products as $product)
<div class="col-lg-4 mt-5">
    <img class="img-fluid" src="{{ asset('images/productimages/'.$product->image)}}" height="150" width="150" alt=""/>
</div>
<div class="col-lg-5">
  <div class="card mt-4">
    <div class="card-body">
        <h5>Buy Now</h5>
        <h6>Select Quantity</h6>
        <div class="">
        <!-- {{ Form::open(['action' => 'WishListController@store','enctype'=>'multipart/form-data']) }}
        {{ Form::close() }} -->

        {{ Form::open(['action' => 'CartController@store','enctype'=>'multipart/form-data']) }}
          {{ Form::selectRange('number_of_items', 1,$product->qauntity,['class'=>'form-control']) }}<br>
          {{ Form::hidden('product_id',$product->id ) }}
          {{ Form::hidden('product_price',$product->price ) }}
          {{ Form::hidden('product_name',$product->name) }}
        <button class="btn btn-sm btn-outline-primary mt-1">Add to Cart</button>
        {{ Form::close() }}

        {{ Form::open(['action' => 'WishListController@store','enctype'=>'multipart/form-data']) }}
        {{ Form::hidden('product_id',$product->id ) }}
        <button type="submit" class="btn btn-sm btn-outline-primary mt-1">Add to wishlist</button>
        {{ Form::close() }}
      </div>

      <h3 class="card-title">{{ $product->name }}</h3>
      <h4>    {{ 'Ugx'.' '.$product->price }}</h4>
      <p class="card-text">{{ $product->description }}</p>
      <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
      4.0 stars
    </div>
  </div>
</div>
@endforeach
@endsection
