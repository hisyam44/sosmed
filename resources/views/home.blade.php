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
                    @include('stats._post')
    
                    @foreach($stats as $stat)
                        @include('stats._stat',['show'=>'false'])
                    @endforeach
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
