                    <div class="media">
                        <div class="media-body panel-body bg-info text-center">
                            <p style="color:#fff;font-size:20pt">{{ $stat->content }}</p>
                                    <button class="btn btn-success">Give Support</button>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ url('stats/'.$stat->id) }}">
                                    Favorite
                                    <span class="badge primary">{{ count($stat->comments) }} </span>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ url('stats/'.$stat->id) }}">
                                    Supports
                                    <span class="badge primary">16</span>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ url('stats/'.$stat->id) }}">
                                    Comments
                                    <span class="badge primary">{{ count($stat->comments) }} </span>
                                    </a>
                                </div>
                            </div>
                        </div> 
                            @if($show=='true')
                                @include('stats._comments') 
                            @endif
    
                    </div>