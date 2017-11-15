@extends('layouts.dashboard')
@section('content')
{{ Form::model($product, ['route' => ['products.update', $product->id]]) }}
<div class="form-group">
  <div class="form-line">
    {{Form::label('name','Name')}}
    {{Form::text('name')}}
  </div>
</div>
<div class="form-group">
  <div class="form-line">
    {{Form::label('price','Price')}}
    {{Form::number('price')}}
  </div>
</div>
<div class="form-group">
  <div class="form-line">
    {{Form::label('description','Description')}}
    {{Form::textarea('description')}}
  </div>
</div>
<div class="form-group">
  <div class="form-line">
    {{Form::label('qty','quantity')}}
    {{Form::number('qauntity')}}
  </div>
</div>
<div class="form-group">
  <div class="form-line">
    {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-outline-primary waves-effect']) }}
  </div>
</div>
{{ Form::close() }}
@endsection
