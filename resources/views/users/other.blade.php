@extends('layouts.app')
@section('content')
    <div class="col-md-12 col-md-offset-0">
        <div class="panel panel-success">
            <div class="panel-heading">
                Create New User
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
                <div class="col-md-6"><!--Left column-->
                {{ Form::open(['action' => 'RegisterAdmin@store']) }}
                <div class="form-group">
                        {{ Form::label('firstName', 'First Name') }}
                        {{ Form::text('firstName', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                        {{ Form::label('phone', 'Phone') }}
                        {{ Form::text('phone', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                        {{ Form::label('password', 'Password') }}
                        {{ Form::text('password', '', ['class' => 'form-control']) }}
                </div>
                </div><!--End of left div-->
                <div class="col-lg-6"><!--Right div-->
                <div class="form-group">
                        {{ Form::label('lastName', 'Last Name') }}
                        {{ Form::text('lastName', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', '', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                        {{ Form::label('password_confirmation', 'Confirm Password') }}
                        {{ Form::text('password_confirmation', '', ['class' => 'form-control']) }}
                </div>
                    <div class="form-line">
                        {{ Form::submit('Submit', ['class' => 'btn btn-block btn-primary']) }}
                    </div>
                </div>
                </div><!--Left div-->
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
