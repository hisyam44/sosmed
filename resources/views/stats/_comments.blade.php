                                @foreach($stat->comments as $comment)
                                <div class="media pull-right center-block">
                                    <div class="media-body">
                                        <p>
                                    
                                        <a href="{{ url('user/'.$comment->user->id) }}">
                                            {{ $comment->user->email }}
                                        </a>
                                        
                                        {{ $comment->content }}</p>
                                        <span class="text-info">{{ $comment->published_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                @endforeach
                                {{ Form::open(['action'=>'CommentController@store','class'=>'form-inline']) }}
                                <div class="form-group">
                                <hr>
                                    <input type="hidden" value="{{ $stat->id }}" name="stat_id"></input>
                                    {{ Form::text('content',null,['class'=>'form-control','placeholder'=>'write a comment']) }}
                                    {{ Form::submit('comment',['class'=>'btn btn-primary'])}}
                                    
                                </div>
                                {{ Form::close() }}