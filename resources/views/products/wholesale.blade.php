@extends('layouts.dashboard')
@section('content')
<div class="col-md-12 col-md-offset-0">
  <div class="card card-success">
    <div class="card-title">
      wholesale details
    </div>
    <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      {{ Form::open(['action' => 'WholeSaleController@store','enctype'=>'multipart/form-data']) }}
      <div class="form-group">
        <div class="form-line">
          {{ Form::label('no_of_items', 'Items per package') }}
          {{ Form::number('no_of_items', '', ['class' => 'form-control']) }}
        </div>
      </div>
      {{ Form::hidden('product_id',$_GET['product_id']) }}
      <div class="form-group">
        <div class="form-line">
          {{ Form::label('price', 'WholeSalePrice') }}
          {{ Form::number('price', '', ['class' => 'form-control']) }}

        </div>
      </div>
      <div class="form-group">
        <div class="form-line">
          {{ Form::label('description', 'Description') }}
          {{ Form::textarea('description', '', ['class' => 'form-control', 'rows'=>'3']) }}
        </div>
      </div>
      <div class="form-group">
        <div class="form-line">
          {{ Form::label('quantity', 'Quantity') }}
          {{ Form::number('quantity', '', ['class' => 'form-control']) }}
        </div>
      </div>
      <div class="form-group">
      <div class="form-line">
          {{ Form::submit('Submit', ['class' => 'btn btn-block btn-outline-primary']) }}
      </div>
      </div>
      {{ Form::close() }}
    </div><!--end of left div-->
</div>
</div>
@endsection
