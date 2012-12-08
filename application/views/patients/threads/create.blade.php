{{Form::open()}}
	{{Form::label( 'title', 'Title' )}}
	{{Form::text( 'title', Input::old( 'title' ) )}}
	<br />

	{{Form::submit( 'Submit' )}}
{{Form::close()}}
