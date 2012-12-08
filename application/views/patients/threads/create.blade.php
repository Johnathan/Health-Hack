@layout('layouts.master')

@section('content')

    <h2>Post a new issue</h2>

    {{Form::open()}}
    	{{Form::label( 'title', 'Title' )}}
    	{{Form::text( 'title', Input::old( 'title' ) )}}
    	@if( $errors->has( 'title' ) )
    		<p>{{$errors->first( 'title' )}}</p>
    	@endif
    	<br />

        {{Form::label( 'message', 'Message' )}}
        {{Form::textarea( 'message', Input::old( 'message' ) )}}
        @if( $errors->has( 'message' ) )
            <p>{{$errors->first( 'message' )}}</p>
        @endif
        <br />

        <label><input type="checkbox" name="urgency" value="urgent"> <strong>This is urgent</strong></label>

        <h4>Disciplines</h4>

        <label><input type="checkbox" name="discipline[]" value="Bleh"> Cardiovascular</label>
        <label><input type="checkbox" name="discipline[]" value="Bleh"> Neurological</label>
        <label><input type="checkbox" name="discipline[]" value="Bleh"> Psychiatric</label>
        <label><input type="checkbox" name="discipline[]" value="Bleh"> Respiratory</label>

    	{{Form::submit( 'Submit' )}}
    {{Form::close()}}

@endsection