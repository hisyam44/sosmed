@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#home" data-toggle="tab">Secrets</a></li>
                <li><a href="#menu1" data-toggle="tab">Share</a></li>
                <li><a href="#menu2" data-toggle="tab">Menu</a></li>
            </ul>
            <div class="panel-body">
                <div class="panel-body">
                <div class="">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                    @if(isset($stat))
                        @include('stats._stat',['show'=>'true'])
                    @endif
                    
                    @if(isset($stats))
                        @foreach($stats as $stat)
                            @include('stats._stat',['show'=>'false'])
                        @endforeach
                    @endif   
                    </div>
                    <div class="tab-pane fade" id="menu1">
                        @include('stats._post')
                    </div>
                    <div class="tab-pane fade" id="menu2"></div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
