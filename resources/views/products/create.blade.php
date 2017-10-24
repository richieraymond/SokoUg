@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="card card-success">
        <div class="card-title card-success">
          Create New Product
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
          {{ Form::open(['action' => 'ProductController@store','enctype'=>'multipart/form-data']) }}
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('name', 'Product Name') }}
              {{ Form::text('name', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('category', 'Product Category') }}
              {{ Form::select('category', $category, '', ['class' => 'form-control show-tick','id'=>'category','placeholder'=>'Choose product category']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              <select name="subcategory" id="subcategory" class="form-control" required>
              </select>
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
              {{ Form::label('price', 'Price') }}
              {{ Form::number('price', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Product Image') }}
              {{ Form::file('icon', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
          <div class="form-line">
              {{ Form::submit('Submit', ['class' => 'btn btn-block btn-outline-primary waves-effect']) }}
          </div>
          </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
	</div>
@endsection

