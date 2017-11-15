@extends('layouts.shop')
@section('content')
<div class="row">
  @foreach($category->products as $product)
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="{{ url('product/productdetails/'.$product->slug ) }}"><img class="card-img-top" src="{{ asset('images/productimages/'.$product->image) }}" height="150" width="150" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="{{ url('product/productdetails/'.$product->slug ) }}"><span class="badge badge-primary">{{ $product->name }}</span></a>
        </h4>
        <h5><span class="badge badge-pill badge-info">{{ 'Ugx'.$product->price}}</span></h5>
        {{ Form::open(['action' => 'CartController@store','enctype'=>'multipart/form-data']) }}
          {{ Form::selectRange('number_of_items', 1,$product->qauntity,['class'=>'form-control']) }}<br>
          {{ Form::hidden('product_id',$product->id ) }}
          {{ Form::hidden('product_price',$product->price ) }}
          {{ Form::hidden('product_name',$product->name) }}
        <button class="btn btn-sm btn-outline-primary mt-1"><i class="fa fa-cart-plus"></i>Add to Cart</button>
        {{ Form::close() }}
        {{ Form::open(['action' => 'WishListController@store','enctype'=>'multipart/form-data']) }}
        {{ Form::hidden('product_id',$product->id ) }}
        <button type="submit" class="btn btn-sm btn-outline-primary mt-1"><i class="fa fa-heart-o"></i>Add to wishlist</button>
        {{ Form::close() }}
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>
  @endforeach
</div>
<!-- /.row -->
@endsection
