@layout('layouts.master')

@section('content')
    <h2>My patients <small><a href="{{ URL::to('/patients/new') }}">Add Patient</a></small></h2>

	@if( isset($patients) && count($patients) > 0 )
		<ul class="patient-cards">
		@foreach( $patients as $patient )
			<li class="patient-card">
				
					<div class="avatar-frame">
						<img src="/img/patient.jpg" />
					</div>
				
				
				<div class="patient-card-right">
					<a href="{{ URL::to('/patients/'.$patient->id) }}"><h3 class="card-title">{{$patient->name}}</h3></a>
					
					<hr class="card-rule" />
					
					<h4 class="card-footer">Open Issue</h4>
				</div>
				
				
			</li>
		@endforeach
		</ul>
	@else
		<p>You have no patients added yet.</p>
	@endif


@endsection
