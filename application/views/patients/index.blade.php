@layout('layouts.master')

@section('content')
    <h2>All patients</h2>

	@if( $patients )
		<ul>
		@foreach( $patients as $patient )
			<li><a href="/patients/{{$patient->id}}">{{$patient->name}}</a></li>
		@endforeach
		</ul>
	@else
		<p>No Patients</p>
	@endif


@endsection
