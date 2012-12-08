{{Form::open()}}
	{{Form::label( 'title', 'Title' )}}
	{{Form::text( 'title', Input::old( 'title' ) )}}
	@if( $errors->has( 'title' ) )
		<p>{{$errors->first( 'title' )}}</p>
	@endif
	<br />

	{{Form::submit( 'Submit' )}}
{{Form::close()}}
