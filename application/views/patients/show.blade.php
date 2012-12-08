@layout('layouts.master')

@section('content')
    <h2>Patient profile</h2>
	{{$patient->name}}

	<h2>Threads</h2>
	@if( $threads = $patient->threads()->get() )
		<ul>
			@foreach( $threads as $thread )
				<li><a href="/patients/{{$patient->id}}/threads/{{$thread->id}}">{{$thread->title}}</a></li>
			@endforeach
		</ul>
	@endif
@endsection
