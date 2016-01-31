@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <h1>Your Application's Landing Page.</h1>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                        <a href="{{ url('register') }}" class="btn btn-success">Signin</a>
                    </div>
                    <div class="col-md-6">
                    </div>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
