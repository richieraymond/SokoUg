@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12 col-md-offset-0">
      <div class="card card-outline-primary">
        <div class="card-header">
          Create New Advert
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
          {{ Form::open(['action' => 'Adverts@store','enctype'=>'multipart/form-data']) }}
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('name','Advert Title') }}
              {{ Form::text('name','', ['class' => 'form-control']) }}
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
              {{ Form::label('starting', 'Start Date') }}
              {{ Form::date('starting', '', ['class' => 'form-control','id'=>'datepicker']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('ending', 'End Date') }}
              {{ Form::date('ending', '', ['class' => 'form-control','id'=>'datepicker']) }}
            </div>
          </div>
          <div class="form-group">
            <div class="form-line">
              {{ Form::label('icon', 'Promotion Image') }}
              {{ Form::file('icon', ['class' => 'form-control']) }}
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
