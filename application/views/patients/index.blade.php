@layout('layouts.master')

@section('content')
    <h2>My patients <small><a href="{{ URL::to('/patients/new') }}">Add Patient</a></small></h2>

	@if( isset($patients) && count($patients) > 0 )
		<ul>
		@foreach( $patients as $patient )
			<li class="patient-card">
				<div class="avatar-frame">
					<img src="/img/patient.jpg" />
				</div>
			<a href="{{ URL::to('/patients/'.$patient->id) }}">{{$patient->name}}</a>
			</li>
		@endforeach
		</ul>
	@else
		<p>You have no patients added yet.</p>
	@endif


@endsection
