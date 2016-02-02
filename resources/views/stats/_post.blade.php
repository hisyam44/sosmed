                    <div class="row">
                        <h3>What is on your mind ?</h3>
                        <div class="col-md-12">
                        {{ Form::open(['action'=>'StatController@store','class'=>'form-vertical']) }}
                            <div class="form-group">
                                {{ Form::textarea('content',null,['class'=>'form-control','rows'=>'3','placeholder'=>'What is on your mind ?']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::submit('Post',['class'=>'btn btn-primary'])}}
                            </div>
                        {{ Form::close() }} 
                        </div>
                    </div>