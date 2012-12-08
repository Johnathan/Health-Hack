@layout('layouts.master')

@section('content')
    <h2>All patients</h2>

	@if( $patients )
		<ul>
		@foreach( $patiens as $patient )
			<li>{{$patient->name}}</li>
		@endforeach
		</ul>
	@else
		<p>No Patients</p>
	@endif


@endsection
