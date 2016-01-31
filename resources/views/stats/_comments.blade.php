                                @foreach($stat->comments as $comment)
                                <div class="media">
                                    <a href="{{ url('user/'.$comment->user->id) }}" class="media-left">
                                        <img class="media-object" src="{{ url('images/'.$comment->user->photo) }}"
                                        width="64px"></img>
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                        <a href="{{ url('user/'.$comment->user->id) }}">
                                            {{ $comment->user->email }}
                                        </a>
                                        </h5>
                                        <span class="text-info">{{ $comment->published_at->diffForHumans() }}</span>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                    <hr>
                                </div>
                                @endforeach
                                {{ Form::open(['action'=>'CommentController@store','class'=>'form-inline']) }}
                                <div class="form-group">
                                    <input type="hidden" value="{{ $stat->id }}" name="stat_id"></input>
                                    {{ Form::text('content',null,['class'=>'form-control','placeholder'=>'write a comment']) }}
                                    {{ Form::submit('comment',['class'=>'btn btn-primary'])}}
                                    
                                </div>
                                {{ Form::close() }}