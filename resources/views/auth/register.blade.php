@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                {{ Form::open(['class'=>'form-horizontal','files'=>'true']) }}
                    <div class="form-group">
                        {{ Form::label('name','Name',['class'=>'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('name',old('name'),['class'=>'form-control']) }}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('email','Email',['class'=>'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('email',old('name'),['class'=>'form-control']) }}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('photo','Photo',['class'=>'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::file('photo1',['class'=>'form-control']) }}
                                @if ($errors->has('photo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('password','Password',['class'=>'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::input('password','password',null,['class'=>'form-control']) }}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('password_confirmation','Confirm Password',['class'=>'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::input('password','password_confirmation',null,['class'=>'form-control']) }}
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                {{ Form::close() }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
