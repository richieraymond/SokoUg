@extends('layouts.shop')
@section('content')
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
			  <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="{{ url('product/productdetails/'.$product->slug ) }}"><img class="card-img-top" src="{{ asset('images/productimages/'.$product->image) }}" height="150" width="150" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a style="text-decoration: none" href="{{ url('product/productdetails/'.$product->slug ) }}"><span style="float:center">{{ $product->name }}</span></a>
                  </h4>
                  {{ Form::open(['action' => 'CartController@store','enctype'=>'multipart/form-data']) }}
                    {{ Form::selectRange('number_of_items', 1,$product->qauntity,['class'=>'form-control']) }}<br>
                    {{ Form::hidden('product_id',$product->id ) }}
                    {{ Form::hidden('product_price',$product->price ) }}
                    {{ Form::hidden('product_name',$product->name) }}
                  <button class="btn btn-sm btn-outline-primary mt-1" style="margin-left:-10px; display:inline-block"><i class="fa fa-cart-plus"></i>Add to Cart</button>
                  {{ Form::close() }}
                  {{ Form::open(['action' => 'WishListController@store','enctype'=>'multipart/form-data']) }}
                  {{ Form::hidden('product_id',$product->id ) }}
                  <button type="submit" class="btn btn-sm btn-outline-primary" style="margin-left:100px; margin-top:-60px; display:inline-block"><i class="fa fa-heart-o"></i>Add to wishlist</button>
                  {{ Form::close() }}
                  <hr style="margin-top:-10px; background:blue;">
                  <h4><span class="badge badge-info">{{ 'Ugx'.' '.$product->price}}</span></h4>
                </div>

              </div>
            </div>
            @endforeach
          </div>
          <!-- /.row -->


@endsection
