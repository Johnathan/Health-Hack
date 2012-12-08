{{Form::open()}}
	{{Form::label( 'name', 'Name' )}}
	{{Form::text( 'name', Input::old( 'name' ) )}}
	@if( $errors->has( 'name' ) )
		<p>{{$errors->first( 'name' )}}</p>
	@endif
	<br />

	{{Form::label( 'email', 'Email' )}}
	{{Form::email( 'email', Input::old( 'email' ) )}}
	@if( $errors->has( 'email' ) )
		<p>{{$errors->first( 'email' )}}</p>
	@endif
	<br />

	{{Form::label( 'password', 'Password' )}}
	{{Form::password( 'password' )}}
	@if( $errors->has( 'password' ) )
		<p>{{$errors->first( 'password' )}}</p>
	@endif
	<br />

	{{Form::submit( 'Submit' )}}

{{Form::close()}}
