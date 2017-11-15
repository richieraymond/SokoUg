@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="card card-outline-success">
        <div class="card-header">
          Make payment
        </div>
        <div class="card-body">
          {{ Form::open(['action' => 'CheckOut@store','enctype'=>'multipart/form-data']) }}
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('payment_method', 'Payment Method') }}
              {{ Form::select('payment_method', ['0'=>'Mobile Money','1'=>'Debit Card','2'=>'Visa','3'=>'Paypal'], ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('card_number', 'Card Number') }}
              {{ Form::text('card_number', '', ['class' => 'form-control', 'rows'=>'3']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('amount', 'Amount') }}
              {{ Form::text('amount',Cart::subtotal(), ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="form-group">
          <div class="form-line">
              {{ Form::submit('Pay', ['class' => 'btn btn-block btn-outline-primary waves-effect']) }}
          </div>
          </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
	</div>
@endsection
