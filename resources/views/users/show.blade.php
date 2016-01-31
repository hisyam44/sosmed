@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                <div class="panel-body">
                <div class="">
                	<h2 class="text-center">{{ $user->name }}</h2>
                	<div class="row">
                	<div class="col-md-6 col-md-offset-3">
                		<img src="{{ url('images/'.$user->photo) }}" class="img img-thumbnail">
                	</div>	
                	</div>
                	<p>{{ $user->email }}</p>
                	@foreach($user->stats as $stat)
                		@include('stats._stat',['show'=>'true'])
                	@endforeach
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop