                    <div class="row">
                        <div class="col-md-11">
                        <h3>Share Your Secrets ...</h3>
                        {{ Form::open(['action'=>'StatController@store','class'=>'form-vertical']) }}
                            <div class="form-group">
                                {{ Form::textarea('content',null,['class'=>'form-control','rows'=>'3','placeholder'=>'Share your secrets...']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::submit('Post',['class'=>'btn btn-primary'])}}
                            </div>
                        {{ Form::close() }} 
                        </div>
                    </div>