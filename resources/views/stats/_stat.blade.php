                    <div class="media">
                    <hr>
                    <div class="panel-body">
                        <a href="{{ url('user/'.$stat->user->id) }}" class="media-left">
                            <img class="media-object" src="{{ url('images/'.$stat->user->photo) }}" width="64px"></img>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                            <a href="{{ url('user/'.$stat->user->id) }}">
                                {{ $stat->user->email }}
                            </a>
                            </h4>
                            <span class="text-info">{{ $stat->published_at->diffForHumans() }}</span>
                            <p>{{ $stat->content }}</p>
                            <a href="{{ url('stats/'.$stat->id) }}">{{ count($stat->comments) }} comments</a>
                            <hr>
                            @if($show=='true')
                                @include('stats._comments') 
                            @endif
                        </div> 
                    </div>
                    </div>