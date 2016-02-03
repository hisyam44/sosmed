                                @foreach($stat->comments as $comment)
                                <div class="media pull-right center-block">
                                    <div class="media-body">
                                        <h4>
                                        <a href="{{ url('user/'.$comment->user->id) }}" class="label label-default">
                                            {{ $comment->user->email }}
                                        </a>
                                        &nbsp;{{ $comment->content }}
                                        </h4>
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