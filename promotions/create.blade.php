@extends('layouts.app')
@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="panel panel-default">
        <div class="panel-heading">
          Create New Promotion Package
        </div>
        <div class="panel-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="col-md-6"><!--Left div-->
          {{ Form::open(['action' => 'PromotionPackageController@store']) }}
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('description', 'Description') }}
              {{ Form::text('description', '', ['class' => 'form-control']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('period', 'Period(Months)') }}
              {{ Form::number('period', '', ['class' => 'form-control','max'=>'12','min'=>'1']) }}
            </div>
          </div>
          <div class="col-md-12 form-group">
            <div class="form-line">
              {{ Form::label('fee', 'Fee') }}
              {{ Form::text('fee', '', ['class' => 'form-control']) }}
            </div>
          </div>
        <div class="col-md-12 form-group">
            {{ Form::submit('Submit', ['class' => 'btn btn-block btn-primary']) }}
          </div>
          {{ Form::close() }}
          </div><!--End of left div-->
        </div>
      </div>
    </div>
@endsection
