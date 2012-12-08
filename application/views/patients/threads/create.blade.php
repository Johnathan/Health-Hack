@layout('layouts.master')

@section('content')

    <div class="row">
        <div class="span3">
            @include('patients._profile')
        </div><!-- end .span3 -->

        <div class="span9">
            <h2>Post a new issue</h2>

            <form action="{{ URL::current() }}" method="POST" class="form-horizontal">
            	
                <fieldset>
                    <div class="control-group{{ $errors->has('name') ? ' error' : '' }}">
                        {{Form::label( 'title', 'Title', array('class' => 'control-label') )}}
                        <div class="controls">
                            <input type="text" name="title" id="title" class="input-xxlarge" value="{{ $errors->has('title') ? Input::old('title') : '' }}" placeholder="What's wrong with {{ $patient->name }}?">
                            {{ $errors->has('title') ? '<span class="help-inline">Title is required</span>' : '' }}
                        </div>
                    </div>

                    <div class="control-group{{ $errors->has('message') ? ' error' : '' }}">
                        {{Form::label( 'message', 'Message', array('class' => 'control-label') )}}
                        <div class="controls">
                            <textarea name="message" id="message" class="input-xxlarge" placeholder="Add some more info here&hellip;">{{ $errors->has('message') ? Input::old('message') : '' }}</textarea>
                            {{ $errors->has('message') ? '<span class="help-inline">Please enter a message</span>' : '' }}
                        </div>
                    </div>

                    <div class="controls">
                        <label><input type="checkbox" name="urgency" value="urgent"> <strong>This is urgent</strong></label>
                    </div>

                    <div class="controls">
                        <h4>Disciplines</h4>

                        <label><input type="checkbox" name="discipline[]" value="Bleh"> Cardiovascular</label>
                        <label><input type="checkbox" name="discipline[]" value="Bleh"> Neurological</label>
                        <label><input type="checkbox" name="discipline[]" value="Bleh"> Psychiatric</label>
                        <label><input type="checkbox" name="discipline[]" value="Bleh"> Respiratory</label>
                    </div>
                </fieldset>

                <div class="form-actions">
            	   {{Form::submit( 'Post Issue', array('class' => 'btn btn-primary') )}}
                </div><!-- end .form-actions -->
            </form>
        </div><!-- end .span9 -->
    </div><!-- end .row -->
@endsection